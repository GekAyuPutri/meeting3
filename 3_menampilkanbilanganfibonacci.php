<?php
$a = 0;
$b = 2;
$n = 10; // jumlah deret


echo "Deret Fibonacci: ";

for ($i = 0; $i < $n; $i++) {
    echo "$a ";
    $c = $a + $b;
    $a = $b;
    $b = $c;

}
?>
