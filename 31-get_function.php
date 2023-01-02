<?php
//1. get_class
class MyClass{
	function name(){
		echo "1. Class Name : ".get_class($this)."<br>";
	}
}

$obj = new MyClass();
$obj->name();
			//echo "Class name is : " . get_class($obj);

//2. get_parent_class
class abc{
	
}
class xyz extends abc{
	function name(){
		echo "2. Parent Class Name : ".get_parent_class($this)."<br>";
	}
}

$obj2 = new xyz();
$obj2->name();
			//echo "Parent Class Name : " . get_parent_class('xyz');

//3. get_class_methods
class MyClassMethods{
	function __construct(){
		//print_r(get_class_methods($this));
		//echo "<br>";
	}
	function myfunc1(){
		
	}
	function myfunc2(){
		
	}
	private function myfunc3(){
		
	}
}
//$obj3 = new MyClassMethods();
$class_methods = get_class_methods('MyClassMethods');
			//print_r($class_methods);
echo "3. Class Methods : ";
foreach($class_methods as $class_method){
	echo "<ul>";
	echo "<li>";
	echo $class_method;
	echo "</li>";
	echo "</ul>";
}
//4. get_class_vars
class MyClassVars{
	public $var1;
	public $var2 = "Hello";
	public $var3 = 100;
	private $var4;
	
	function __construct(){
		$this->var1 = "Wow";
		$this->var2 = "Hi";
		//print_r(get_class_vars(__CLASS__));
		//print_r(get_object_vars($this));
		//echo "<br>";
	} 
	
}
$obj4 = new MyClassVars();
$class_var = get_class_vars(get_class($obj4));
echo "4. Class Variables : " ;
foreach($class_var as $x => $var){
	echo "<ul>";
	echo "<li>";
	echo "$x = $var";
	echo "</li>";
	echo "</ul>";
}
//5. get_object_vars
$object_var = get_object_vars($obj4);
echo "5. Object Variables : " ;
foreach($object_var as $x => $var){
	echo "<ul>";
	echo "<li>";
	echo "$x = $var";
	echo "</li>";
	echo "</ul>";
}

//6. get_called_class
interface test{
	
}

trait tests{
	
}
class abcd{
	use tests;
	public $hello;
	static public function test(){
		
		var_dump(get_called_class());
		echo "<br>";
	}
}
class axyz extends abcd{
	
}
echo "6. called Class :<br>";
abcd::test();
axyz::test();
//7. get_declared_classes
//8. get_declared_interfaces
//9. get_declared_traits
echo "7. Classes :";
echo "<br>";
echo "8. Interfaces :<br>";
echo "9. Traits :<br>";

		//print_r(get_declared_classes());
		//print_r(get_declared_interfaces());
		print_r(get_declared_traits());
		echo "<br>";
//10
class_alias("abcd","ab");

$object = new ab;
$object->hello = "Nishan";
echo "10. Class Name Change :".$object->hello;

?>