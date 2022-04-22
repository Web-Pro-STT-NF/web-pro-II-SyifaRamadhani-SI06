<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <div class="container card mt-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WEB02</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Review PHP
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP5 OOP
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Submit</button>
                        </form>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Login</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown    
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-4">
                <a><b>Show</b></a>
                <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                10
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                    <li><a class="dropdown-item" href="#">7</a></li>
                    <li><a class="dropdown-item" href="#">8</a></li>
                    <li><a class="dropdown-item" href="#">9</a></li>
                    <li><a class="dropdown-item" href="#">10</a></li>
                </ul>
                </div>
                <a><b>Entries</b></a>
            </div>
            <div class="col-8 d-flex justify-content-end">
                <a><b>Search :</b></a> <input type="text">
            </div>
        </div>

        <div class="mt-4">
        <div class="container-fluid">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Tahun Angkatan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    require_once "class_mahasiswa.php";
                    $satu = new Mahasiswa("012011", "Faiz Fikri", "TI", 2012, 3.8, "Cum Laude");
                    $dua = new Mahasiswa("012012", "Alissa Khairunnisa", "TI", 2012, 3.9, "Cum Laude");
                    $tiga = new Mahasiswa("011011", "Rosalie Naurah", "SI", 2010, 3.46, "Memuaskan");
                    $empat = new Mahasiswa("011012", "Defghi Muhammad", "SI", 2010, 3.2, "Memuaskan");
                    $list = [$satu, $dua, $tiga, $empat];

                    $no = 1;
                    foreach ($list as $action){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $action->nim?></td>
                            <td><?= $action->nama?></td>
                            <td><?= $action->thn_angkatan?></td>
                            <td><?= $action->prodi?></td>
                            <td><?= $action->ipk?></td>
                            <td><?= $action->predikat_ipk()?></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
            </table>
        </div>
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <a>Show 1 to 4 of 4 entries</a>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <nav class="pagination-sm">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>

        <div class="row mt-2">
            <hr>
        </div>
        <div class="mt-2">
            <h6>Lab Pemrograman Web Lanjutan</h6>
            <a>Dosen : Sirojul Munir S.Si,M.Kom</a>
            <br>
            <a>STT-NF - Kampus B</a>
        </div>
    </div>
</body>
</html>