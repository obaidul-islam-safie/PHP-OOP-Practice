<?php 
abstract class baseclass{
	public $name;
	abstract protected function show($a,$b);
}

class derivedclass extends baseclass{
	public function show($c,$d){
		echo $c*$d;
	}
}

$test = new derivedclass();
$test->show(10,20);
?>