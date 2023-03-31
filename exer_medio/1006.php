<?php 
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);
$media = (($A * 2 + $B * 3 + $C * 5) /10);
echo "MEDIA = " . number_format($media, 1, ".", "") . "\n";
?>