<?php 
$num = fgets(STDIN);
$vhoras = fgets(STDIN);
$horas = fgets(STDIN);
$salario = $vhoras * $horas;
echo "NUMBER = $num";
echo "SALARY = U$ " . number_format($salario, 2 , ".", "") . "\n";
?>