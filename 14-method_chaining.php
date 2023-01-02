<?php
 class hello{
	public function sayhello(){
		echo "Hello from first function<br>";
		return $this;
	} 
	public function sayhi(){
		echo "Hi from second function<br>";
		return $this;
	}
	public function sayby(){
		echo "Buy from third function<br>";
		return $this;
	}
 }
 
 $test = new hello();
 $test->sayhello()->sayhi()->sayby();


?>