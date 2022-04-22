<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card mt-4">
        <div class="row bg-light">
            <div class="col-12 pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Form Nilai Siswa</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-12"></div>
        </div>
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <hr>
        </form>
            <?php
            $proses = isset($_POST['proses']) ? $_POST['proses'] : "";
            $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : "";
            $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : "";
            $nilai_uts = isset($_POST['uts']) ? $_POST['uts'] : "";
            $nilai_uas = isset($_POST['uas']) ? $_POST['uas'] : "";
            $nilai_tugas = isset($_POST['tugas']) ? $_POST['tugas'] : "" ;
    
            echo "<br/>Nama : $nama_siswa";
            echo "<br/>Mata Kuliah : $mata_kuliah";
            echo "<br/>Nilai UTS : $nilai_uts";
            echo "<br/>Nilai UAS : $nilai_uas";
            echo "<br/>Nilai Tugas : $nilai_tugas";


            $uts = $nilai_uts* 30 / 100;
            $uas = $nilai_uas* 35 / 100;
            $tugas = $nilai_tugas* 35 / 100;
            $nilai = $uts + $uas + $tugas;
            
            echo "<br/>Nilai Akhir : $nilai";
            if ($nilai > 55) {
                echo '<br/>Keterangan : Lulus';
                } else {
                echo '<br/>Keterangan : Tidak Lulus';
                }

            if ($nilai >= 0 && $nilai <= 35) {
                echo "<br/>Grade : E";
                } else if ($nilai >= 36 && $nilai <= 55) {
                echo "<br/>Grade : D";
                } else if ($nilai >= 56 && $nilai <= 69) {
                echo "<br/>Grade : C";
                } else if ($nilai >= 70 && $nilai <= 84) {
                echo "<br/>Grade : B";
                } else if ($nilai >= 85 && $nilai <= 100) {
                echo "<br/>Grade : A";
                } else {
                echo "<br/>Grade : I";
                }

            switch (true) {
                case ($nilai >= 0 && $nilai <= 35):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                case ($nilai >= 36 && $nilai <= 55):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai >= 56 && $nilai <= 69):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai >= 70 && $nilai <= 84):
                    echo "<br/>Predikat : Baik";
                    break;
                case ($nilai >= 85 && $nilai <= 100):
                    echo "<br/>Predikat : Sangat Baik";
                    break;
                default:
                    echo "<br/>Predikat : Tidak Ada";
                }
            ?>
        <div class="row bg-light">
            <div class="col-12">
                <p class="pt-3">Develop by Syifa Ramadhani @2022</p>
            </div>
        </div>
    </div>
</body>
</html>