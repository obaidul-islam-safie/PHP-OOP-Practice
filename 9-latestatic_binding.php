<?php
class base{
	protected static $name = "Maruf Nishan";
	public static function show(){
		//echo self::$name;
		echo static::$name;
	}
	
}
class derived extends base {
	protected static $name = "Nishan";
}

$test = new derived();
$test->show();
?>