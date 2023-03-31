<?php 
$nome = fgets(STDIN);
$salario = fgets(STDIN);
$tvendas = fgets(STDIN);

$salariof = $salario + ($tvendas * 0.15);

echo "TOTAL = U$ " . number_format($salariof, 2 , ".", "") . "\n";
?>