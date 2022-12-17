<?php
abstract class ParentClass {

    abstract protected function prefixName($name);

}

class ChildClass extends ParentClass {
    public function prefixName($name) {
        if ($name == "Obaidul Islam"){
            $prefix = "Mr. ";
        } elseif ($name == "Safie Islam") {
            $prefix = "Md. ";
        }else {
            $prefix = "";
        }
        return $prefix . $name;
    }
}

$obj = new ChildClass;
echo $obj-> prefixName("Obaidul Islam");
echo "<br>";
echo $obj-> prefixName("Safie Islam");





// abstract class parentclass{
//     public $name;

//     abstract protected function calc($a, $b);
// }

// class childClass extends parentclass{

//     public function calc($a, $b){
//         echo $a + $b;
//     }
// }

// $test= new childClass();
// $test->calc(10, 20);
?>