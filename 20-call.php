<?php
class student{
	private $first_name;
	private $last_name;
	
	private function setName($fname,$lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
		echo $this->first_name;
		echo "\t";
		echo $this->last_name."<br>";
	}
	
	public function __call($method,$args){
		if(method_exists($this,$method))
		{
			call_user_func_array([$this,$method],$args);
		}
		else{
			echo "Method does not exist : $method";
		}
	}
}

$test = new student();
$test->setName("Maruf","Nishan");

echo "<per>";
print_r($test);
echo "</per>";
?>