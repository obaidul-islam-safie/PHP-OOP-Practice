<?php
class  student{
	public $name;
	public $course;
	
	public function __construct($n){
		$this->name = $n;
	}
	
	public function setCourse(course $c){
		$this->course = $c;
	}
	//clone sub object
	public function __clone(){
		$this->course = clone $this->course;
	}
}
class course{
	public $cname ;
	public function __construct($cn){
		$this->cname = $cn;
	}
}
$course = new course("PHP");

//Set by adress
$student = new student("Maruf Nishan");
$student->setCourse($course);
print_r($student);
echo"<br>";
echo"<br>";
//Set by adress
$student2 = $student;
$student2->name = "Tusar Kumar";
echo $student2->name."<br><br>";
//Set by value
$student3 = clone $student;
$student3->name = "Shakhawat Sabbir";
print_r($student3);
echo"<br><br>";
//Set by value
$student4 = clone $student;
$student4->name = "Murad";
$student4->course->cname = "Java";
print_r($student4);
echo"<br>";
echo "<br>".$student->name;
echo "<br>".$student->course->cname;
?>