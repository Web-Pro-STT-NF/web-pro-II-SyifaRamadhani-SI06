<?php
require_once 'pasien.php';
require_once 'BMI.php';
class BmiPasien extends BMI {
  public $tanggal;
  

  function __construct($tanggal, $kode, $nama, $gender, $berat, $tinggi){
    $this->tanggal = $tanggal;
    $this->kode = $kode;
    $this->nama = $nama;
    $this->gender = $gender;
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

}

