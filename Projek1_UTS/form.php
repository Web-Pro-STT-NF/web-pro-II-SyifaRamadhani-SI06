<?php
include_once 'header.php';
include_once 'sidebarbmi.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pemrograman Web</h1>
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

              <div class="row">
                <div class="col-md-12 mb-5">
                  <h2 class="mt-5 text-center text-secondary">Kalkulator Sehat</h2>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  <div class="card mb-3  w-75">
                    <div class="card-header text-white bg-dark">Form Input Data</div>
                    <div class="card-body">
                      <form action="data_bmi.php" method="POST">
                        <div class="form-group row  pb-4">
                          <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                          <div class="col-8">
                            <input id="tanggal" name="tanggal" placeholder="Tanggal Periksa" type="date" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row  pb-4">
                          <label for="kode" class="col-4 col-form-label">Kode</label>
                          <div class="col-8">
                            <input id="kode" name="kode" placeholder="Kode Pasien" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-4 col-form-label" for="name">Nama Pasien</label>
                          <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Pasien">
                          </div>
                        </div>
                        <div class="form-group row pt-4 pb-2">
                          <label for="berat" class="col-4 col-form-label ">Berat Badan (kg)</label>
                          <div class="col-8">
                            <input id="berat" name="berat" type="text" class="form-control" placeholder="Berat Badan">
                          </div>
                        </div>
                        <div class="form-group row pt-2 pb-4">
                          <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label>
                          <div class="col-8">
                            <input id="tinggi" name="tinggi" placeholder="Tinggi Badan" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row pt-2 pb-4">
                          <label for="email" class="col-4 col-form-label">Email</label>
                          <div class="col-8">
                            <input id="email" name="email" placeholder="Email" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row  pb-4">
                          <label for="tugas" class="col-4 col-form-label">Jenis Kelamin</label>
                          <div class="col-8">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-Laki">
                              <label class="form-check-label" for="gender">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
                              <label class="form-check-label" for="gender">Perempuan</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>