<?php 
/*$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);*/
$valores = explode(" ", fgets(STDIN));
$maior = ($valores[0]+$valores[1]+abs($valores[0]-$valores[1]))/2;
$maior = ($maior+$valores[2]+ abs($maior-$valores[2]))/2;
echo "$maior eh o maior\n";
?>