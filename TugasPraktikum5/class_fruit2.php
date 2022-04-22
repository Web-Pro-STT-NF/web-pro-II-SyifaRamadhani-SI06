<?php
class Fruit2 {
    public $name, $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function intro() {
        echo 'The Fruit is {$this->name} and the color is {$this->color}.';
    }
}

// Strawberry in inherited from fruit
class Strawberry extends Fruit2 {
    function message() {
        echo 'Am I a Fruit or berry?';
    }
}

$strawberry = new Strawberry('Strawberry', 'red');
$strawberry->message();
$strawberry->intro();
?>