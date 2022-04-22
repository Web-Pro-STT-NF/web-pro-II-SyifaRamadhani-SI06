<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Data Account Bank</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <table class="table text-center table-bordered table-hover w-100 m-auto mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</i></th>
                                <th scope="col">No.Account</i></th>
                                <th scope="col">Pemilik</i></th>
                                <th scope="col">Saldo</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "class_bank.php";
                            $cust1 = new BankAccount('C001', 6000000, 'Ahmad');
                            $cust2 = new BankAccount('C002', 5350000, 'Budi');
                            $cust3 = new BankAccount('C003', 2500000, 'Kurniawan');
                            $list = [$cust1, $cust2, $cust3];

                            $nomor = 1;
                            foreach ($list as $action) {
                                echo '<tr><td>' . $nomor++ . '</td>';
                                echo '<td>' . $action->nomor . '</td>';
                                echo '<td>' . $action->costumer . '</td>';
                                echo '<td>' . number_format($action->saldo, 0, ',', '.') . '</td></tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <?php
                $cust1->transfer($cust3, 1500000);
                $cust1->transfer($cust2, 500000);
                echo "<b>Sesudah Transfer</b>";
                $cust1->cetak();
                echo "<hr>";
                $cust2->cetak();
                echo "<hr>";
                $cust3->cetak();
                echo "<hr>";
                echo "<b>Sesudah Ditarik</b>";
                $cust2->withdraw(2500000);
                $cust2->cetak();
                ?>
            </div>
        </div>
    </div>
</body>

</html>