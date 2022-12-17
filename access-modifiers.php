<?php
class base {
    protected $name; //same class or inherit then we run this code

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "your Name : " . $this->name . "<br>";
    }
        
}
class son extends base{
    public function get(){
        echo "Your Name : $this->name " . "<br>";
    }
}

$test = new son("obaidul Islam");

$test->get();





// class father {
//     private $a;
//     public function disp(){
//         $this->a = 30;
//         echo "Parent Function $this->a";
    
//     }
// }
// $obj= new father();
// $obj->disp();

?>