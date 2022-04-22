<?php
require_once "class_account.php";
class BankAccount extends Account
{
    public $costumer;

    function __construct($nomor, $saldo, $costumer)
    {
        parent::__construct($nomor, $saldo);
        $this->costumer = $costumer;
    }

    function cetak()
    {
        parent::cetak();
        echo "<br>Costumer : " . $this->costumer;
    }

    function transfer($akun, $uang)
    {
        $akun->deposit($uang);
        $this->withdraw($uang);
    }
}