<?php 
$a="5";
$b="2.5";
$komentar="Selamat Datang";
echo "Nilai Variabel A adalah = $a <br>";
//Variabel Bertipe Integer
echo "Nilai Variabel B adalah =$b <br>";
//Variabel Bertipe Real
echo ("Nilai Variabel Komentar adalah = $komentar<br>");
//Variabel Bertipe String
$tambah= $a + $b;
//Rumus Pengurangan
$kurang= $a - $b;
//Rumus Perkalian
$kali= $a * $b;
//Rumus Pembagian
$bagi = $a / $b;

echo ("Hasil Penjumlahan A dan B adalah = $tambah <br>");
echo ("Hasil Pengurangan A dan B adalah = $kurang <br>");
echo ("Hasil Perkalian A dan B adalah = $kali <br>");
echo ("Hasil Pembagian A dan B adalah = $bagi <br>");

$nama = "POLIBAN";
$garis = "===========================";
echo "<p>";
echo $garis. "<br>";
echo $komentar. " Di Lab ". $nama. "<br>Selamat Belajar Pemrograman Web <br>";
echo $garis. "<br>";
?>