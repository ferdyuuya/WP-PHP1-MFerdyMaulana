<?php
$pi = 3.14;
$radius = 6; 
$tinggi = 8; 

$luasAlas = $pi * $radius * $radius;

// Mencari nilai S
$s = sqrt($radius * $radius + $tinggi * $tinggi);

$luasPermukaan = $pi * $radius * ($radius + $s);

echo "Luas Alas Kerucut dengan radius $radius cm adalah: " . $luasAlas . " cm. <br>\n ";


echo "Luas Permukaan Kerucut dengan radius $radius cm dan tinggi $tinggi cm adalah: " . $luasPermukaan . " cm. <br>\n";
?>
