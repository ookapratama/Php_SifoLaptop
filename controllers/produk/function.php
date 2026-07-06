<?php

function getMaxBobotPerJenis($db)
{
   $result = mysqli_query($db, "SELECT jenis_fitur, MAX(bobot) AS max_bobot FROM fitur_laptop GROUP BY jenis_fitur");
   $max = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $max[$row['jenis_fitur']] = (float)$row['max_bobot'];
   }
   return $max;
}

function getSpecWeights($tujuan)
{
   // Curated per-tujuan importance, NOT derived from raw bobot minimums:
   // RAM's bobot scale (2-32) and Processor/Storage/VGA's tier scale (1-8) are incompatible units,
   // so deriving weight ratios from raw min-bobot values would always over-weight RAM.
   $table = [
      'office_ringan' => ['RAM' => 20, 'Processor' => 15, 'Storage' => 5, 'VGA' => 5],
      'bisnis'        => ['RAM' => 18, 'Processor' => 15, 'Storage' => 7, 'VGA' => 5],
      'editing'       => ['RAM' => 12, 'Processor' => 15, 'Storage' => 6, 'VGA' => 12],
      'gaming'        => ['RAM' => 10, 'Processor' => 12, 'Storage' => 5, 'VGA' => 18],
   ];

   return $table[$tujuan] ?? ['RAM' => 11.25, 'Processor' => 11.25, 'Storage' => 11.25, 'VGA' => 11.25];
}

function buildWeights($optionalAnswered)
{
   $base = [
      'spec' => 45,
      'budget' => 20,
      'mobilitas' => 15,
      'baterai' => 10,
      'merk' => 3,
      'kategori' => 2,
      'is_touchscreen' => 1.25,
      'is_convertible' => 1.25,
      'has_backlit_kb' => 1.25,
      'has_biometric' => 1.25,
   ];

   $mandatoryKeys = ['spec', 'budget', 'mobilitas', 'baterai'];
   $mandatorySum = array_sum(array_intersect_key($base, array_flip($mandatoryKeys)));

   $freed = 0;
   foreach ($optionalAnswered as $key => $answered) {
      if (!$answered) {
         $freed += $base[$key];
      }
   }

   $weights = [];
   foreach ($mandatoryKeys as $key) {
      $weights[$key] = $base[$key] + $freed * ($base[$key] / $mandatorySum);
   }
   foreach ($optionalAnswered as $key => $answered) {
      $weights[$key] = $answered ? $base[$key] : 0;
   }

   return $weights;
}

function scoreDimension($bobot, $maxBobot)
{
   if ($maxBobot <= 0) {
      return 1.0;
   }
   return min(1.0, $bobot / $maxBobot);
}

function budgetCap($budgetRange)
{
   switch ($budgetRange) {
      case 'under_5':
         return 5000000;
      case '5_to_10':
         return 10000000;
      case '10_to_15':
         return 15000000;
      default:
         return 0; // above_15, or unset -> uncapped
   }
}

function scoreBudget($harga, $budgetRange)
{
   $cap = budgetCap($budgetRange);
   if ($cap <= 0) {
      return 1.0;
   }
   if ($harga <= $cap) {
      return 1.0;
   }
   return max(0.0, 1 - ($harga - $cap) / $cap);
}

function decayScoreLte($value, $good, $bad)
{
   if ($value <= $good) {
      return 1.0;
   }
   if ($value >= $bad) {
      return 0.0;
   }
   return 1 - ($value - $good) / ($bad - $good);
}

function decayScoreGte($value, $good, $bad)
{
   if ($value >= $good) {
      return 1.0;
   }
   if ($value <= $bad) {
      return 0.0;
   }
   return ($value - $bad) / ($good - $bad);
}

function scoreMobilitas($screenBobot, $berat, $mobilitas)
{
   if ($mobilitas == 'sangat_sering') {
      $screenScore = decayScoreLte($screenBobot, 13, 17);
      $beratScore = decayScoreLte($berat, 1.4, 2.8);
      return ($screenScore + $beratScore) / 2;
   }

   if ($mobilitas == 'kadang') {
      if ($screenBobot < 14) {
         $screenScore = decayScoreGte($screenBobot, 14, 11);
      } elseif ($screenBobot > 15) {
         $screenScore = decayScoreLte($screenBobot, 15, 18);
      } else {
         $screenScore = 1.0;
      }
      $beratScore = decayScoreLte($berat, 1.9, 3.8);
      return ($screenScore + $beratScore) / 2;
   }

   if ($mobilitas == 'jarang') {
      return decayScoreGte($screenBobot, 15, 11);
   }

   return 1.0;
}

function scoreBaterai($baterai, $bateraiChoice)
{
   if ($bateraiChoice == 'terbatas') {
      return min(1.0, $baterai / 55);
   }
   return 1.0;
}

function calculateMatchScore($produk, $criteria, $maxBobot)
{
   $weights = $criteria['weights'];
   $specWeights = $criteria['spec_weights'];
   $breakdown = [];

   $dims = [
      'RAM' => ['bobot' => (float)$produk['ram_bobot'], 'weight' => $specWeights['RAM']],
      'Processor' => ['bobot' => (float)$produk['prosesor_bobot'], 'weight' => $specWeights['Processor']],
      'Storage' => ['bobot' => (float)$produk['storage_bobot'], 'weight' => $specWeights['Storage']],
      'VGA' => ['bobot' => (float)$produk['vga_bobot'], 'weight' => $specWeights['VGA']],
   ];

   $specDetail = [];
   $specContribution = 0;
   foreach ($dims as $jenis => $dim) {
      $max = $maxBobot[$jenis] ?? 1;
      $score = scoreDimension($dim['bobot'], $max);
      $specDetail[$jenis] = ['score' => $score, 'weight' => $dim['weight'], 'contribution' => $score * $dim['weight']];
      $specContribution += $specDetail[$jenis]['contribution'];
   }
   $specScore = $weights['spec'] > 0 ? $specContribution / $weights['spec'] : 0;
   $breakdown['spec'] = [
      'weight' => $weights['spec'],
      'score' => $specScore,
      'contribution' => $specContribution,
      'matched' => $specScore >= 0.75,
      'detail' => $specDetail,
   ];

   $budgetScore = scoreBudget((float)$produk['harga_laptop'], $criteria['budget_range']);
   $breakdown['budget'] = [
      'weight' => $weights['budget'],
      'score' => $budgetScore,
      'contribution' => $budgetScore * $weights['budget'],
      'matched' => $budgetScore >= 0.9,
   ];

   $mobilitasScore = scoreMobilitas((float)$produk['screen_bobot'], (float)$produk['berat_laptop'], $criteria['mobilitas']);
   $breakdown['mobilitas'] = [
      'weight' => $weights['mobilitas'],
      'score' => $mobilitasScore,
      'contribution' => $mobilitasScore * $weights['mobilitas'],
      'matched' => $mobilitasScore >= 0.75,
   ];

   $bateraiScore = scoreBaterai((float)$produk['baterai_laptop'], $criteria['baterai']);
   $breakdown['baterai'] = [
      'weight' => $weights['baterai'],
      'score' => $bateraiScore,
      'contribution' => $bateraiScore * $weights['baterai'],
      'matched' => $bateraiScore >= 0.75,
   ];

   if ($weights['merk'] > 0) {
      $score = (stripos($produk['merk_laptop'] . ' ' . $produk['model_laptop'], $criteria['merk']) !== false) ? 1.0 : 0.0;
      $breakdown['merk'] = ['weight' => $weights['merk'], 'score' => $score, 'contribution' => $score * $weights['merk'], 'matched' => $score >= 1];
   }

   if ($weights['kategori'] > 0) {
      $score = (stripos($produk['nama_kategori'], $criteria['kategori_laptop']) !== false) ? 1.0 : 0.0;
      $breakdown['kategori'] = ['weight' => $weights['kategori'], 'score' => $score, 'contribution' => $score * $weights['kategori'], 'matched' => $score >= 1];
   }

   foreach (['is_touchscreen', 'is_convertible', 'has_backlit_kb', 'has_biometric'] as $flag) {
      if ($weights[$flag] > 0) {
         $score = ((int)$produk[$flag] === 1) ? 1.0 : 0.0;
         $breakdown[$flag] = ['weight' => $weights[$flag], 'score' => $score, 'contribution' => $score * $weights[$flag], 'matched' => $score >= 1];
      }
   }

   $total = 0;
   foreach ($breakdown as $item) {
      $total += $item['contribution'];
   }

   return ['total_score' => $total, 'breakdown' => $breakdown];
}

function buildReasons($produk, $criteria, $breakdown, $totalScore)
{
   $reasons = [];
   $reasons[] = "Skor kecocokan keseluruhan: " . round($totalScore) . "%.";

   $tujuanText = [
      'office_ringan' => "Cocok untuk Tugas Harian Standar (Browsing/Zoom/Office) dengan prosesor hemat daya dan performa memadai.",
      'bisnis' => "Sangat baik untuk Produktivitas Kerja & Desain Ringan berkat kombinasi CPU mid-tier dan RAM yang mumpuni.",
      'editing' => "Direkomendasikan untuk Editing Video & Rendering karena dilengkapi CPU kelas atas dan RAM/GPU performa tinggi.",
      'gaming' => "Sangat direkomendasikan untuk Gaming Intensif dengan spesifikasi CPU performa tinggi dan GPU Dedicated tangguh.",
   ];
   if (isset($tujuanText[$criteria['tujuan']])) {
      $specPct = round($breakdown['spec']['score'] * 100);
      $reasons[] = $tujuanText[$criteria['tujuan']] . " (Kecocokan spesifikasi: {$specPct}%)";
   }

   $beratLaptop = $produk['berat_laptop'];
   $screen = $produk['screen'];
   $mobilitasPct = round($breakdown['mobilitas']['score'] * 100);
   if ($criteria['mobilitas'] == 'sangat_sering') {
      $reasons[] = "Mobilitas tinggi dengan bobot {$beratLaptop} kg dan layar {$screen} (Kecocokan: {$mobilitasPct}%).";
   } elseif ($criteria['mobilitas'] == 'kadang') {
      $reasons[] = "Bobot seimbang ({$beratLaptop} kg) dengan layar {$screen}, pas untuk penggunaan fleksibel (Kecocokan: {$mobilitasPct}%).";
   } elseif ($criteria['mobilitas'] == 'jarang') {
      $reasons[] = "Ukuran layar {$screen} memberikan kenyamanan optimal saat bekerja di meja (Kecocokan: {$mobilitasPct}%).";
   }

   $bateraiPct = round($breakdown['baterai']['score'] * 100);
   if ($breakdown['baterai']['matched']) {
      $reasons[] = "Kapasitas baterai " . $produk['baterai_laptop'] . " WHr mendukung daya tahan lama untuk penggunaan Anda (Kecocokan: {$bateraiPct}%).";
   } else {
      $reasons[] = "Kapasitas baterai " . $produk['baterai_laptop'] . " WHr (Kecocokan: {$bateraiPct}%).";
   }

   $hargaFormatted = number_format($produk['harga_laptop'], 0, ',', '.');
   if ($breakdown['budget']['matched']) {
      $reasons[] = "Sesuai dengan anggaran pilihan Anda (Harga: Rp {$hargaFormatted}).";
   } else {
      $budgetPct = round($breakdown['budget']['score'] * 100);
      $reasons[] = "Sedikit di luar anggaran ideal Anda (Harga: Rp {$hargaFormatted}, Kecocokan budget: {$budgetPct}%).";
   }

   $optionalLabels = [
      'merk' => "Sesuai dengan preferensi merk/model Anda.",
      'kategori' => "Sesuai dengan kategori laptop pilihan Anda.",
      'is_touchscreen' => "Menyediakan fitur Layar Sentuh (Touchscreen) sesuai keinginan Anda.",
      'is_convertible' => "Memiliki desain fleksibel 2-in-1 yang bisa dilipat menjadi tablet.",
      'has_backlit_kb' => "Dilengkapi Keyboard Backlit untuk kenyamanan mengetik di kondisi minim cahaya.",
      'has_biometric' => "Sistem keamanan biometrik (Fingerprint/Face Unlock) aktif untuk proteksi ekstra.",
   ];
   foreach ($optionalLabels as $key => $label) {
      if (isset($breakdown[$key]) && $breakdown[$key]['matched']) {
         $reasons[] = $label;
      }
   }

   return $reasons;
}
