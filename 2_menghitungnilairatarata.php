<?php
$nilai = [10, 20, 30, 40];
$total = 0;

foreach ($nilai as $n) {
    $total += $n;
}

$rata = $total / count($nilai);
echo "Nilai rata-rata adalah: $rata";
?>
