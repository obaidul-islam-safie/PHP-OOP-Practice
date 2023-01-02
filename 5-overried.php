<?php
class bases{
    public $name = "Nishan" ;
    public function show($a , $b){
        echo "Name is ".$this->name."<br>";
        return $a*$b;
    }
}
class deriveds extends bases{
    public $names ;
    public function show($a , $b){
        echo "Name : ".$this->name."<br>";
        return $a+$b;
    }
}
$test = new deriveds();
$test->name = "Maruf";
echo "Name : ".$test->name."<br>";
echo $test->show(5,10);
?>