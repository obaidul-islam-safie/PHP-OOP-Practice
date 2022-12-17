<?php
interface parent1 {

    public function calc($a, $b);
}

interface parent2 {
    public function sub($c, $d);
}
class childClass implements parent1, parent2 {
    public function calc($a, $b){
        echo $a +$b;
    }
    public function sub($c, $d){
        echo $c - $d;
    }
}

$test = new childClass();
$test->calc(20, 10);
echo "<br>";
$test-> sub(50, 20);
?>