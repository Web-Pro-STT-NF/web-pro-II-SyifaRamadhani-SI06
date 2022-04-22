<?php
class Account
{
    public $nomor;
    public $saldo;

    public function __construct($nomor, $saldo)
    {
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang)
    {
        $this->saldo = (int)($this->saldo) + (int)($uang);
    }

    public function withdraw($uang)
    {
        $this->saldo = (int)($this->saldo) - (int)($uang);
    }

    public function cetak()
    {
        echo "No.Account : " . $this->nomor;
        echo "<br>Saldo : " . number_format($this->saldo, 0, ',', '.');
    }
}