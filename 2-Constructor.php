<?php 
class person{
	public $name,$age;
	function __construct($n = "No Name",$a = 0){
		$this->name=$n;
		$this->age=$a;
	}
	function show(){
		echo "Name : ".$this->name .",\t". "Age : ".$this->age."<br>";
	}
}
$c1 = new person();
$c2 = new person("Maruf",23);
$c3 = new person("Tusar",22);
$c4 = new person("Sabbir",24);
echo $c1->show();
echo $c2->show();
echo $c3->show();
echo $c4->show();
?>