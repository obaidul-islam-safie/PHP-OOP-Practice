<?php
class base{
	public static $name = "Maruf Nishan";
	
	public function __construct($a){
		echo self:: $name=$a."<br>";
		//self::show();
	}
}
class derived extends base {
	public static function show(){
		echo parent::$name="Maruf Nishan"."<br>";
	}
}

//echo base::$name."<br>";
//base::show();
$test = new derived("Nishan");
$test->show();
?>