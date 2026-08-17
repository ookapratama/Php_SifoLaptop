<?php

/**
 * Regression tests for the produk.php recommendation filtering bug.
 *
 * Bug: produk.php always returned the top 4 laptops by weighted score, even when
 * those laptops did not actually satisfy the user's selected filter criteria
 * (merk/kategori/budget). Fix: after scoring with calculateMatchScore(), rows are
 * filtered with array_filter() to drop any row whose 'matched' flag is false for a
 * criterion the user actually supplied, before ranking/slicing to top 4. If the
 * filtered set is empty, it falls back to the old unfiltered ranking and raises a
 * "no exact match" flag.
 *
 * This is a standalone plain-PHP assertion script (no test framework). The project
 * has no composer.json / vendor / existing test infrastructure of any kind, so a new
 * dependency (e.g. PHPUnit) was intentionally NOT introduced -- see final report.
 *
 * calculateMatchScore() and its helper functions in controllers/produk/function.php
 * have no database dependency (only getMaxBobotPerJenis() touches mysqli, and it is
 * not exercised here), so the file can be required directly without a DB connection.
 *
 * Run with:
 *   php tests/produk_filter_regression_test.php
 *
 * Exits 0 when all assertions pass, exits 1 (and prints a summary of failures) otherwise.
 */

require __DIR__ . '/../controllers/produk/function.php';

// ---------------------------------------------------------------------------
// Minimal assertion harness
// ---------------------------------------------------------------------------

$GLOBALS['__total'] = 0;
$GLOBALS['__failed'] = 0;
$GLOBALS['__current_test'] = '';

function test($name, callable $fn)
{
   $GLOBALS['__current_test'] = $name;
   echo "== $name ==\n";
   try {
      $fn();
   } catch (Throwable $e) {
      $GLOBALS['__failed']++;
      $GLOBALS['__total']++;
      echo "  [FAIL] uncaught exception: " . $e->getMessage() . "\n";
   }
}

function assertTrue($condition, $message)
{
   $GLOBALS['__total']++;
   if ($condition) {
      echo "  [PASS] $message\n";
   } else {
      $GLOBALS['__failed']++;
      echo "  [FAIL] $message\n";
   }
}

function assertFalse($condition, $message)
{
   assertTrue(!$condition, $message);
}

function assertEquals($expected, $actual, $message)
{
   $GLOBALS['__total']++;
   if ($expected == $actual) {
      echo "  [PASS] $message\n";
   } else {
      $GLOBALS['__failed']++;
      echo "  [FAIL] $message (expected " . var_export($expected, true) . ", got " . var_export($actual, true) . ")\n";
   }
}

// ---------------------------------------------------------------------------
// Fixture builders
// ---------------------------------------------------------------------------

/**
 * Builds a $criteria array shaped exactly like the one produk.php assembles from
 * $_GET before calling calculateMatchScore().
 */
function makeCriteria(array $overrides = [])
{
   $merk = $overrides['merk'] ?? '';
   $kategori = $overrides['kategori_laptop'] ?? '';

   $optionalAnswered = [
      'merk' => !empty($merk),
      'kategori' => !empty($kategori),
      'is_touchscreen' => false,
      'is_convertible' => false,
      'has_backlit_kb' => false,
      'has_biometric' => false,
   ];
   $weights = buildWeights($optionalAnswered);

   $tujuan = $overrides['tujuan'] ?? 'bisnis';
   $specWeights = getSpecWeights($tujuan);
   $specScale = $weights['spec'] / 45;
   foreach ($specWeights as $dim => $w) {
      $specWeights[$dim] = $w * $specScale;
   }

   return array_merge([
      'tujuan' => $tujuan,
      'mobilitas' => 'kadang',
      'baterai' => '',
      'budget_range' => '',
      'merk' => $merk,
      'kategori_laptop' => $kategori,
      'is_touchscreen' => 0,
      'is_convertible' => 0,
      'has_backlit_kb' => 0,
      'has_biometric' => 0,
      'weights' => $weights,
      'spec_weights' => $specWeights,
   ], $overrides);
}

/**
 * A laptop row with sane defaults for every field calculateMatchScore() reads.
 * Callers override only the fields relevant to the scenario.
 */
function makeLaptop(array $overrides = [])
{
   return array_merge([
      'merk_laptop' => 'Generic',
      'model_laptop' => 'Model X',
      'nama_kategori' => 'Ultrabook',
      'harga_laptop' => 8000000,
      'ram_bobot' => 16,
      'prosesor_bobot' => 5,
      'storage_bobot' => 5,
      'vga_bobot' => 2,
      'screen_bobot' => 14,
      'berat_laptop' => 1.5,
      'baterai_laptop' => 55,
      'is_touchscreen' => 0,
      'is_convertible' => 0,
      'has_backlit_kb' => 0,
      'has_biometric' => 0,
   ], $overrides);
}

$MAX_BOBOT = ['RAM' => 32, 'Processor' => 8, 'Storage' => 8, 'VGA' => 8];

/**
 * Mirrors the scoring loop in produk.php: runs calculateMatchScore() over every row
 * and attaches _match_score / _breakdown, exactly like the `foreach ($laptop_rows as &$row)`
 * block right before the eligibility filter.
 */
function scoreRows(array $laptopRows, array $criteria, array $maxBobot)
{
   foreach ($laptopRows as &$row) {
      $result = calculateMatchScore($row, $criteria, $maxBobot);
      $row['_match_score'] = $result['total_score'];
      $row['_breakdown'] = $result['breakdown'];
   }
   unset($row);
   return $laptopRows;
}

/**
 * Faithful replica of the eligibility filter + fallback added to produk.php
 * (the array_filter block, lines ~219-234). Returns [$ranked_rows, $show_no_exact_match].
 * Kept in the test file only -- produk.php itself is never modified.
 */
function applyEligibilityFilterAndRank(array $laptopRows, array $criteria)
{
   $eligible_rows = array_filter($laptopRows, function ($row) use ($criteria) {
      $breakdown = $row['_breakdown'];
      if (!empty($criteria['merk']) && empty($breakdown['merk']['matched'])) {
         return false;
      }
      if (!empty($criteria['kategori_laptop']) && empty($breakdown['kategori']['matched'])) {
         return false;
      }
      if (!empty($criteria['budget_range']) && empty($breakdown['budget']['matched'])) {
         return false;
      }
      return true;
   });

   $show_no_exact_match = empty($eligible_rows);
   $ranked_rows = $show_no_exact_match ? $laptopRows : $eligible_rows;

   usort($ranked_rows, fn($a, $b) => $b['_match_score'] <=> $a['_match_score']);
   $top4 = array_slice($ranked_rows, 0, 4);

   return [$top4, $show_no_exact_match];
}

function namesOf(array $rows)
{
   return array_map(fn($r) => $r['merk_laptop'] . ' ' . $r['model_laptop'], array_values($rows));
}

// ---------------------------------------------------------------------------
// Test 1: would have caught the original bug.
// A wrong-brand, over-budget laptop scores HIGHER on raw total_score than the
// laptop that actually matches the user's merk/budget criteria. Pre-fix code
// (no array_filter) would have returned the higher-scoring, non-matching laptop.
// ---------------------------------------------------------------------------
test(
   'should exclude a high-scoring laptop whose brand does not match the requested merk',
   function () use ($MAX_BOBOT) {
      $criteria = makeCriteria(['merk' => 'Asus', 'budget_range' => '5_to_10']);

      $asusMatch = makeLaptop([
         'merk_laptop' => 'Asus', 'model_laptop' => 'Zenbook 14', 'nama_kategori' => 'Ultrabook',
         'harga_laptop' => 8000000, 'ram_bobot' => 8, 'prosesor_bobot' => 3, 'storage_bobot' => 3, 'vga_bobot' => 1,
         'screen_bobot' => 14, 'berat_laptop' => 1.3, 'baterai_laptop' => 60,
      ]);
      $lenovoHighScore = makeLaptop([
         'merk_laptop' => 'Lenovo', 'model_laptop' => 'Legion 5', 'nama_kategori' => 'Gaming',
         'harga_laptop' => 25000000, 'ram_bobot' => 32, 'prosesor_bobot' => 8, 'storage_bobot' => 8, 'vga_bobot' => 8,
         'screen_bobot' => 15, 'berat_laptop' => 1.8, 'baterai_laptop' => 70,
      ]);

      $rows = scoreRows([$asusMatch, $lenovoHighScore], $criteria, $MAX_BOBOT);

      // Sanity check the premise: without any filtering, the wrong-brand laptop
      // would outrank (or tie) the actually-matching one -- this is what caused the bug.
      assertTrue(
         $rows[1]['_match_score'] >= $rows[0]['_match_score'],
         'premise: non-matching Lenovo scores at least as high as the matching Asus (' .
            round($rows[1]['_match_score'], 2) . ' >= ' . round($rows[0]['_match_score'], 2) . ')'
      );
      assertFalse($rows[1]['_breakdown']['merk']['matched'], 'premise: Lenovo does not satisfy the merk=Asus criterion');

      [$topResults, $showNoExactMatch] = applyEligibilityFilterAndRank($rows, $criteria);
      $names = namesOf($topResults);

      assertFalse($showNoExactMatch, 'fallback is not triggered (a matching laptop exists)');
      assertTrue(in_array('Asus Zenbook 14', $names, true), 'the matching Asus laptop is present in the final results');
      assertFalse(in_array('Lenovo Legion 5', $names, true), 'the wrong-brand, over-budget Lenovo is excluded from the final results');
   }
);

// ---------------------------------------------------------------------------
// Test 2: fix works correctly with brand + category + budget all specified.
// ---------------------------------------------------------------------------
test(
   'should include the laptop matching merk/kategori/budget and exclude a clearly non-matching one',
   function () use ($MAX_BOBOT) {
      $criteria = makeCriteria(['merk' => 'Asus', 'kategori_laptop' => 'Ultrabook', 'budget_range' => '5_to_10']);

      $fullMatch = makeLaptop([
         'merk_laptop' => 'Asus', 'model_laptop' => 'Zenbook 14', 'nama_kategori' => 'Ultrabook',
         'harga_laptop' => 8000000,
      ]);
      $wrongCategoryOnly = makeLaptop([
         'merk_laptop' => 'Asus', 'model_laptop' => 'ROG Strix', 'nama_kategori' => 'Gaming',
         'harga_laptop' => 9000000,
      ]);
      $wrongBrandAndOverBudget = makeLaptop([
         'merk_laptop' => 'Acer', 'model_laptop' => 'Nitro 5', 'nama_kategori' => 'Gaming',
         'harga_laptop' => 30000000,
      ]);

      $rows = scoreRows([$fullMatch, $wrongCategoryOnly, $wrongBrandAndOverBudget], $criteria, $MAX_BOBOT);
      [$topResults, $showNoExactMatch] = applyEligibilityFilterAndRank($rows, $criteria);
      $names = namesOf($topResults);

      assertFalse($showNoExactMatch, 'fallback is not triggered');
      assertTrue(in_array('Asus Zenbook 14', $names, true), 'laptop matching merk+kategori+budget is included');
      assertFalse(in_array('Asus ROG Strix', $names, true), 'laptop matching merk+budget but wrong kategori is excluded');
      assertFalse(in_array('Acer Nitro 5', $names, true), 'laptop matching neither merk, kategori, nor budget is excluded');
   }
);

// ---------------------------------------------------------------------------
// Edge case: no laptop satisfies the criteria -> falls back to the full,
// unfiltered, score-ranked list and flags show_no_exact_match.
// ---------------------------------------------------------------------------
test(
   'should fall back to the unfiltered ranked list and flag no-exact-match when nothing satisfies the criteria',
   function () use ($MAX_BOBOT) {
      $criteria = makeCriteria(['merk' => 'Toshiba', 'budget_range' => '5_to_10']);

      $laptopA = makeLaptop(['merk_laptop' => 'Asus', 'model_laptop' => 'Zenbook 14', 'harga_laptop' => 8000000]);
      $laptopB = makeLaptop(['merk_laptop' => 'Lenovo', 'model_laptop' => 'IdeaPad 3', 'harga_laptop' => 9000000]);

      $rows = scoreRows([$laptopA, $laptopB], $criteria, $MAX_BOBOT);
      [$topResults, $showNoExactMatch] = applyEligibilityFilterAndRank($rows, $criteria);

      assertTrue($showNoExactMatch, 'show_no_exact_match flag is raised when the eligible set is empty');
      assertEquals(2, count($topResults), 'fallback returns the full unfiltered set (no rows dropped)');
   }
);

// ---------------------------------------------------------------------------
// Edge case: no optional criteria supplied (merk/kategori/budget all empty) ->
// nothing should be excluded on those dimensions.
// ---------------------------------------------------------------------------
test(
   'should not exclude any laptop on merk/kategori/budget when those criteria were not supplied',
   function () use ($MAX_BOBOT) {
      $criteria = makeCriteria(); // merk = '', kategori_laptop = '', budget_range = ''

      $laptopA = makeLaptop(['merk_laptop' => 'Asus', 'model_laptop' => 'Zenbook 14', 'nama_kategori' => 'Ultrabook', 'harga_laptop' => 8000000]);
      $laptopB = makeLaptop(['merk_laptop' => 'Lenovo', 'model_laptop' => 'Legion 5', 'nama_kategori' => 'Gaming', 'harga_laptop' => 25000000]);

      $rows = scoreRows([$laptopA, $laptopB], $criteria, $MAX_BOBOT);

      // breakdown must not even contain merk/kategori keys, since their weight is 0
      // when the criteria are unanswered (buildWeights) -- confirms the filter predicate
      // can't reference a missing 'matched' key and wrongly exclude a row.
      assertFalse(isset($rows[0]['_breakdown']['merk']), 'breakdown has no merk entry when merk criterion is empty');
      assertFalse(isset($rows[0]['_breakdown']['kategori']), 'breakdown has no kategori entry when kategori criterion is empty');

      [$topResults, $showNoExactMatch] = applyEligibilityFilterAndRank($rows, $criteria);
      $names = namesOf($topResults);

      assertFalse($showNoExactMatch, 'fallback is not triggered');
      assertTrue(in_array('Asus Zenbook 14', $names, true), 'laptop A is kept when merk/kategori/budget were not filters');
      assertTrue(in_array('Lenovo Legion 5', $names, true), 'laptop B is kept when merk/kategori/budget were not filters');
   }
);

// ---------------------------------------------------------------------------
// Summary
// ---------------------------------------------------------------------------
echo "\n";
echo "Total assertions: {$GLOBALS['__total']}, Failed: {$GLOBALS['__failed']}\n";

if ($GLOBALS['__failed'] > 0) {
   echo "RESULT: FAIL\n";
   exit(1);
}

echo "RESULT: PASS\n";
exit(0);
