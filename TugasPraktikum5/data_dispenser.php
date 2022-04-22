<?php
include_once "class_dispenser.php";
$minuman1 = new Minuman("Coffee", 3000);
$minuman1->refillGalon(2500);
echo "<br>";
$minuman1->hasilDispenser();
echo "<br>";
$minuman1->cetak();
echo "<br>";
$minuman1->isi_gelas();
echo "<br>";
$minuman1->refillGelas(5);
echo "<br>";
$minuman1->hasilDispenser();
