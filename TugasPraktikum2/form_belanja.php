<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container card position-relative mt-4">
        <div class="row bg-light">
            <div class="col-4 pt-3">
                <p>Belanja Online</p>
            </div>
        </div>
        <form method="POST" action="form_belanja.php">
            <div class="form-group row pt-3">
                <label for="cutomer" class="col-4 col-form-label">Cutomer</label> 
                <div class="col-4">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-4">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
            </div>
        </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-4">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-4">
        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
    </div>
        </form>
        <hr>
        <?php
            $proses = isset($_POST['proses']) ? $_POST['proses'] : "";
            $customer = isset($_POST['customer']) ? $_POST['customer'] : "";
            $produk = isset($_POST['produk']) ? $_POST['produk'] : "";
            $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : "";

            echo "<br>Nama Costumer : $customer";
            echo "<br>Produk : $produk";
            echo "<br>Jumlah Beli : $jumlah";

            $kulkas = $jumlah * 3100000;
            $tv = $jumlah * 4200000;
            $mesin = $jumlah * 3800000;

            if ($produk == 'KULKAS') {
                echo "<br> Total Belanja : Rp." .$kulkas;
                } else if ($produk == 'TV') {
                    echo "<br> Total Belanja : Rp." .$tv;
                } else if ($produk == 'MESIN CUCI') {
                    echo "<br> Total Belanja : Rp." .$mesin;
                } 
        ?>
        <table class="table w-25 position-absolute top-0 end-0">
            <tr style="background-color:#375CA6; color:white;">
                <td scope="col">Daftar Harga</td>
            </tr>
            <tr>
                <td scope="row">TV : 4.200.000</td>
            </tr>
            <tr>
                <td scope="row">KULKAS : 3.100.000</td>
            </tr>
            <tr>
                <td scope="row">MESIN CUCI : 3.800.000</td>
            </tr>
            <tr style="background-color:#375CA6; color:white;">
                <td scope="row">Harga Dapat Berubah Setiap Saat</td>
            </tr>
        </table>
        <div class="row bg-light">
            <div class="col-12">
                <p class="pt-3">Develop by Syifa Ramadhani @2022</p>
            </div>
        </div>
    </div>
</body>
</html>