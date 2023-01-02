<?php
class hello{
	public function __toString(){
	return "Can't print object as a string of class : ".get_class($this);	
	}
}
$test = new hello();
echo $test;
?>