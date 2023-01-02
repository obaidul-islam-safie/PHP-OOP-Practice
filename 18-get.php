<?php
class hello{
	public $name = "Maruf Nishan";
	private $age = 23;
	public function __get($property){
		echo "YOu are trying to access non existing or private property($property)<br>";
	}
}

$test = new hello();
echo $test->name."<br>";
echo $test->age."<br>";//private property
echo $test->data."<br>";//not defined


class abc{
	private $data = ["Name"=>"Maruf Nishan","Course"=>"PHP","Fee"=>2000];
	public function __get($key){
		if(array_key_exists($key,$this->data)){
			return $this->data[$key];
		}else{
			return "This key($key) is not defined.";
		}
	}
}
$test2 = new abc ();
echo $test2->Name."<br>";
echo $test2->Course."<br>";
echo $test2->Fee."<br>";
echo $test2->Hi."<br>";
?>