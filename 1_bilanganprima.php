<?php
$bilangan = 7;
$prima = true;

if ($bilangan <= 1) {
    $prima = false;
} else {
    for ($i = 2; $i <= sqrt($bilangan); $i++) { //menghitung akar kuadrat dari suatubilangan
        if ($bilangan % $i == 0) {
            $prima = false;
            break;
        }
    }
}

if ($prima) {
    echo "$bilangan anjay ini bilangan prima";
} else {
    echo "$bilangan tetot ini bukan bilangan prima";
}
?>
