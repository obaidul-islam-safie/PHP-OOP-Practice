<?php
//when we same name use base methods ande derives methodes then we call overriding mathodes

class A{
    public $name = "parent class";

    public function calc($a, $b){
        return $a*$b;
    }
}
class derived extends A{
    public $name = "child class";

    public function calc($a, $b){
        return $a+$b;
 }

}
$test = new derived();
echo $test->calc(5, 10);

?>