<?php 
$A = fgets(STDIN);
$B = fgets(STDIN);
$media = (($A * 3.5 + $B * 7.5) /11);
echo "MEDIA = " . number_format($media, 5, ".", "") . "\n";
?>