<?php
//class_exists
class MyClass{
  
}
if (class_exists('MyClass')){
	echo "1. Class Exist<br>";
}
else{
	echo "Class Doesn't Exist";
}
//class_existss
interface MyInterface{
	
}

if (interface_exists('MyInterface')){
	echo "2. MyInterface Exist<br>";
}
else{
	echo "MyInterface Doesn't Exist";
}
//method_exists
class MyClass1{
 public function MyMethod(){

 }	 
}
$obj = new MyClass1();

if (method_exists($obj,'MyMethod')){
	echo "3. Method Exist<br>";
}
else{
	echo "Method Doesn't Exist";
}
//method_exists
trait MyTrait{
 public function MyMethod(){}
}

if (trait_exists('MyTrait')){
	echo "4. Trait Exist<br>";
}
else{
	echo "Trait Doesn't Exist";
}
//property_exists
class MyClass3{
  public $test;
}
if (property_exists('MyClass3','test')){
	echo "5. Property Exist<br>";
}
else{
	echo "Property Doesn't Exist";
}
//is_a
class MyClass4{
}
$test = new MyClass4();

if (is_a($test,'MyClass4')){
	echo "6. This object is Myclass4 object<br>";
}
else{
	echo "Object Doesn't Exist";
}
//is_subclass_of
class MyClass5{
}
class MyClass6 extends MyClass5{
}
$test2 = new MyClass6();

if (is_subclass_of($test2,'MyClass5')){
	echo "7. This \$test2 is a object of subclass of  MyClass6<br>";
}
else{
	echo "This \$test2 isn't a object of subclass of  MyClass6<br>";
}
?>