<?php
//int type hinting
function sum(int $v){
	echo "Age ".$v + 1;
	echo "<br>";
}

sum(20);

//class type hinting
class hello{
	public function sayhello(){
		echo "Hello Everyone<br>";	
	}
}

class bye{
	public function saybye(){
		echo "Bye Everyone<br>";
	}	
}

function wow(hello $c){
	$c->sayhello();
}

$test = new hello();

wow($test);

//class type hinting with array
class school{
	public function getname(student $names){
		foreach($names->Names() as $name)
		{
			echo $name . "<br>";
		}
	}
}

class student{
	public function Names(){
		return ["Maruf","Tusar","Sabbir"];
	}	
}
class library{
	
}
$std = new student();
$scl = new school();
$lib = new library();
$scl->getname($std);

?>