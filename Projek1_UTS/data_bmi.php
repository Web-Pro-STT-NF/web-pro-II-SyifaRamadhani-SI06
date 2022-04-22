<?php
include_once 'header.php';
include_once 'sidebarbmi.php';
require_once 'BMI.php';
require_once 'BMIPasien.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kalkulator Sehat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Fixed Layout</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
              <?php
              $tanggal = $_POST['tanggal'];
              $kode = $_POST['kode'];
              $nama = $_POST['nama'];
              $gender = $_POST['gender'];
              $berat = $_POST['berat'];
              $tinggi = $_POST['tinggi'];



              $list1 = ['tanggal' => '2022-01-10', 'kode' => 'P001', 'nama' => 'Ahmad', 'gender' => 'Laki-Laki', 'berat' => 69.8, 'tinggi' => 169];
              $list2 = ['tanggal' => '2022-01-10', 'kode' => 'P002', 'nama' => 'Rina', 'gender' => 'Perempuan', 'berat' => 55.3, 'tinggi' => 165];
              $list3 = ['tanggal' => '2022-01-11', 'kode' => 'P003', 'nama' => 'Lutfi', 'gender' => 'Laki-Laki', 'berat' => 45.2, 'tinggi' => 171];
              $list4 = ['tanggal' => $tanggal, 'kode' => $kode, 'nama' => $nama, 'gender' => $gender, 'berat' => $berat, 'tinggi' => $tinggi];

              $list_siswa = [$list1, $list2, $list3, $list4];


              ?>

              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-table mr-1"></i>
                  DataTable
                </div>
                <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Periksa</th>
                          <th>Kode Pasien</th>
                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Berat Badan (kg)</th>
                          <th>Tinggi Badan (cm)</th>
                          <th>Nilai BMI</th>
                          <th>Status BMI</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($list_siswa as $action) {
                          $bmiPasien = new BmiPasien($action['tanggal'], $action['kode'], $action['nama'], $action['gender'], $action['berat'], $action['tinggi']);
                        ?>
                          <tr>
                            <th><?= $no++ ?></th>
                            <td><?= $action['tanggal'] ?></td>
                            <td><?= $action['kode'] ?></td>
                            <td><?= $action['nama'] ?></td>
                            <td><?= $action['gender'] ?></td>
                            <td><?= $action['berat'] ?></td>
                            <td><?= $action['tinggi'] ?></td>
                            <td><?= substr($bmiPasien->statusBMI(), 0, 5) ?></td>
                            <td><?= $bmiPasien->hasilBmi($bmiPasien->statusBMI()) ?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <?php
              include_once 'footer.php';
              ?>