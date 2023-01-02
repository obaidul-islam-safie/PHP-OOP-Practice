<?php
class hello{
	public function __construct(){
	echo "This is construct function<br>";	
	}
	
	public function hi(){
	echo "This is hi function<br>";
	}
	
	public function __destruct(){
	echo "This is destruct function<br>";	
	}
}

$test = new hello();
$test->hi();
?>