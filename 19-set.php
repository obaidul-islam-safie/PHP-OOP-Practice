<?php
class student{
	public $Name;
	private $Age;
	public function hello(){
		echo $this->Name;
		echo $this->Age;
	}
	public function __get($property)
	{
		echo "YOu are trying to access non existing or private property($property)<br>";
	}
	public function __set($property,$value)
	{
		if (property_exists($this,$property)){
			$this->$property = $value;
		}
		else{
			echo "This is a non existing : $property<br>";
		}
		
	}
}

$test = new student();
echo $test->Name= "Maruf Nishan<br>" ;
$test->Age= "23<br>" ;
echo $test->Age;
$test->Course= "PHP<br>" ;
echo $test->Course;
$test->hello();
?>