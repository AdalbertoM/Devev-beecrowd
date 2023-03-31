<?php 
$nome = fgets(STDIN);
$salario = fgets(STDIN);
$tvendas = fgets(STDIN);

$salariof = number_format(round(num: $salario + ($tvendas * 0.15), precision: 2, mode: PHP_ROUND_HALF_EVEN), decimals: 2, decimal_separator: ".", thousands_separator: "");

echo "TOTAL = R$ $salariof" . PHP_EOL;
?>