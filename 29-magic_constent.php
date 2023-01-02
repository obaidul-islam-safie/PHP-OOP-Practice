<?php
namespace MyNamespace;
trait MyTrait{
	public function getTraitName(){
		echo "8. The trait nsme is : " . __TRAIT__."<br>";
	}
}
echo "1. Line Number : " . __LINE__."<br>";
echo "2. Full path Of this file : " . __FILE__."<br>";
echo "3. Full path Of this directory : " . __DIR__."<br>";

function Hello(){
echo "4. The function nsme is : " . __FUNCTION__."<br>";
}
hello();

class MyClass{
	use MyTrait;
	public function Hello(){
	echo "5. The class nsme is : " . __CLASS__."<br>";
	echo "6. The method nsme is : " . __METHOD__."<br>";
	echo "7. The namespace nsme is : " . __NAMESPACE__."<br>";
	
	}
}
$obj = new MyClass();
$obj->Hello();
$obj->getTraitName();
?>