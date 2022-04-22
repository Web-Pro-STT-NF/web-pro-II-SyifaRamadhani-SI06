<?php
class BMI
{
    public $berat, $tinggi;

    function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function statusBMI()
    {
        return $this->berat / pow($this->tinggi / 100, 2);
    }

    function hasilBmi($bmi)
    {
        switch ($bmi) {
            case $bmi < 18.5:
                return 'Kekurangan berat badan';
            case $bmi > 18.5 && $bmi < 24.9:
                return 'Normal (ideal)';
            case $bmi > 25 && $bmi < 29.9:
                return 'Kelebihan berat badan';
            case $bmi > 30;
                return 'Kegemukan (Obesitas)';
            default:
                return 'error';
        }
    }
}
