<?php
	class student{
		public $course;
		private $first_name;
		private $last_name;
		private $data = ['name'=>'Test Name','age'=>'20'];
		
		public function setName($fname,$lname)
		{
			$this->first_name = $fname;
			$this->last_name = $lname;
		}
		
		public function __isset($property){
			echo isset($this->$property)."<br>";
			echo isset($this->data[$property]);
		}
	}
	
	$test = new student();
	$test->course = "PHP";
	echo isset($test->course)."<br>";
	$test->setName("Maruf","Nishan");
	echo isset($test->first_name);
	echo isset($test->last_name);
	echo isset($test->name);
	
	//echo empty($test->city);


?>