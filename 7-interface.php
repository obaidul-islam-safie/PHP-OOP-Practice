<?php 
interface parent1{
	function sum($a,$b);
}
interface parent2{
	function sub($a,$b);
}

class childclass implements parent1,parent2{
	public function sum($a,$b){
		echo $a+$b."<br>";
	}
	public function sub($a,$b){
		echo $a-$b;
	}
}

$test = new childclass();
$test->sum(10,20);
$test->sub(20,10);
?>