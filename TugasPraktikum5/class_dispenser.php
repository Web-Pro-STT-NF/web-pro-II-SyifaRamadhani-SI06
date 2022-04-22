<?php
class Dispenser
{
    protected $volume = 0, $hargaSegelas;
    private $volumeGelas = 250, $total = 7000, $totalG = 7;
    public $namaMinuman;

    public function __construct($volume, $volumeGelas, $total, $totalG)
    {
        $this->volume = $volume;
        $this->volumeGelas = $volumeGelas;
        $this->total = $total;
        $this->total = $totalG;
    }

    public function hasilDispenser()
    {
        echo "Galon memiliki air yang bervolume {$this->volume} ml <br> Saldo yang dimiliki {$this->total}<br> Jumlah gelas yang dimiliki {$this->totalG} <br> volume gelas yang dimiliki {$this->volumeGelas}";
    }

    public function refillGalon(int $volume)
    {
        if ($volume > 0) {
            $this->volume = $volume;
            echo "Anda sudah mengisi volume air sebanyak {$this->volume} ml";
        } else {
            echo "Volume air tidak bisa kurang dari 0";
        }
    }
    public function isi_gelas()
    {
        if ($this->volume >= $this->volumeGelas && $this->totalG > 0) {
            $this->totalG--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->total = $this->total + $this->hargaSegelas;
            echo "Anda telah menuangkan air kedalam gelas berukuran {$this->volumeGelas} ml dengan harga {$this->hargaSegelas}";
        } elseif ($this->totalG <= 0) {
            echo "Tidak ada gelas tersedia, silahkan isi ulang gelas";
        } elseif ($this->volume < $this->volumeGelas) {
            echo "Volume air galon tidak mencukupi";
        }
    }

    public function refillGelas(int $gelas)
    {
        $harga_gelas = 500;
        $total_harga = $harga_gelas * $gelas;
        if (
            $this->total >= $total_harga
            && $total_harga >= $harga_gelas
        ) {
            $this->total = $this->total - $total_harga;
            $this->totalG = $this->totalG + $gelas;
            echo "Anda telah melakukan isi ulang gelas sebanyak {$gelas} gelas dengan total harga {$total_harga} atau {$harga_gelas}/pcs";
        } elseif ($this->total < $harga_gelas) {
            echo "Uang anda tidak mencukupi";
        } elseif ($total_harga < $harga_gelas) {
            echo "Masukkan angka gelas dengan benar";
        }
    }
}

class Minuman extends Dispenser
{
    public function __construct($namaMinuman, $hargaSegelas)
    {
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $hargaSegelas;
    }

    public function cetak()
    {
        echo "Ini adalah {$this->namaMinuman} seharga {$this->hargaSegelas} per gelasnya";
    }
}