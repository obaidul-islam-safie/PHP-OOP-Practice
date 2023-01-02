<?php
 trait name{
	 public function show(){
		 echo "Maruf Nishan"."<br>";
	 }
	 public function sayhi(){
		 echo "Hi Nishan"."<br>";
	 }
 }
 trait age{
	 public function showage(){
		 echo "Age 24"."<br>";
	 }
 }
 class base{
	 use name,age;
 }
 class base2{
	 use name;
 }
 
 $test = new base();
 $test2 = new base2();
 
 $test->show();
 $test->showage();
 $test->sayhi();
 $test2->show();
?>