<?php
require_once 'class_persegipanjang.php';
$satu = new persegipanjang(7, 9);
$dua = new persegipanjang(10, 15);

echo "<br>Luas Persegi Panjang I : " .$satu->getluas();
echo "<br>Luas Persegi Panjang II : " .$dua->getluas();

echo "<br>Keliling Persegi Panjang I : " .$satu->getkeliling();
echo "<br>Keliling Persegi Panjang II : " .$dua->getkeliling();
?>