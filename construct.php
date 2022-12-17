<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

// class Car {
//     public $color;
//     public $model;
//     public $price;

//     public function __construct($color,$model,$price){
//         $this-> color = $color;
//         $this-> model = $model;
//         $this-> price = $price;
//     }
//     public function message(){
//         return "My car is a ". $this-> color . " " . $this-> model ." Price is " .  $this-> price . "!"; 
//     }
// }
// $myCar = new Car("black","volvo",1200000);
// echo $myCar -> message();
// echo "<br>";
// $mycar = new Car("blue","BMW",125000000);
// echo $myCar -> message();
?>