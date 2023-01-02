<?php
/*Public AccessModifier*/
echo"**Public AccessModifier**<br>";
class base{
	public $name;
	public function __construct($n){
		$this->name = $n;
	}
	public function show(){
		echo "Name : ".$this->name."<br>";
	}
}

class derived extends base{
	public function get(){
		echo "My Name is " . $this->name."<br>";
	}
}

$a = new base("Nishan");
$a->name = "Maruf";//property override
$a->show();

$a1 = new derived("Tusar");
$a1->get();

/*Protected AccessModifier*/
echo"<br>**Protected AccessModifier**<br>";
class baseprotected{
	protected $name;
	public function __construct($n){
		$this->name = $n;
	}
	public function show(){
		echo "Name : ".$this->name."<br>";
	}
}

class derivedprotected extends baseprotected{
	public function get(){
		echo "We can " . $this->name."<br>";
	}
}

$b = new baseprotected("Nishan Protected");
/*$b->name = "Maruf";*/   //protected property acess not possible outside class
$b->show();

$b1 = new derivedprotected(" use protected name in derived class");
$b1->get();

/*Private AccessModifier*/
echo"<br>**Private AccessModifier**<br>";
class baseprivate{
	Private $name;
	public function __construct($n){
		$this->name = $n;
	}
	public function show(){
		echo "Name : ".$this->name."<br>";
	}
}
class derivedprivate extends baseprivate{
	public function get(){
		/*echo "We can " . $this->name."<br>";*/ //not possible to acess private property
		echo "We can not use " . "private property outside base class"."<br>";
	}
}
$b = new baseprivate("Nishan Private");
/*$b->name = "Maruf";*/   //protected property acess not possible outside class
$b->show();

$b1 = new derivedprivate("Nishan Private");
$b1->get();
?>