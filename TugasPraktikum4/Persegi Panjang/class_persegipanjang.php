<?php
class persegipanjang{
    private $panjang;
    private $lebar;
    const sisi = 2;
    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getluas()
    {
        return $this->panjang + $this->lebar;
    }
    function getkeliling()
    {
        return self::sisi * ($this->panjang + $this->lebar);
    }
}
?>