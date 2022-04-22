<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n) { // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n) { // a protected function
        $this->color = $n;
    }
    private function set_weight($n) { // a private function
        $this->weight = '300';
    }

}

$mango = new Fruit();
$mango->name = 'Mango'; //OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>