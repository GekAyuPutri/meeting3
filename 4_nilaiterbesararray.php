<?php
$angka = [20, 55, 15, 90, 45];
$max = $angka[0];

foreach ($angka as $n) {
    if ($n > $max) {
        $max = $n;
    }
}

echo "Nilai terbesar adalah: $max";
?>
