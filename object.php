<?php

class calculator{
    public $a, $b,$c; 

    function sum(){
        $this->c = $this->a + $this->b;
        echo $this->c . "<br>";
    }
    function sub(){
        $this->c = $this->a - $this->b;
        echo $this->c . "<br>";
    }
}

$c1 = new calculator();  //Object
$c1->a = 20;
$c1->b = 10;

$c2 = new calculator();
$c2->a = 30;
$c2->b = 10;

$c1->sum();  //Methods call
$c2->sub();
$c1->sub();

// echo "sum value of c1 " . $c1->sum() . "\n";
// echo "sub value of c2 " . $c2->sub();


// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function set_color($color) {
//     $this->color = $color;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name: " . $apple->get_name();
// echo "<br>";
// echo "Color: " . $apple->get_color();
?>