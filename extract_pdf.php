<?php
$f = file_get_contents('panduan_kbf_rekomendasi_laptop.pdf');
$lines = [];
$len = strlen($f);
$current = '';
for ($i = 0; $i < $len; $i++) {
    $c = ord($f[$i]);
    if ($c >= 32 && $c < 127) {
        $current .= chr($c);
    } else {
        if (strlen($current) > 3) {
            $lines[] = $current;
        }
        $current = '';
    }
}
if (strlen($current) > 3) {
    $lines[] = $current;
}
echo implode("\n", $lines);
