<?php
trait hello{
	private function sayhello(){
		echo "Hello everyone, I am from hello_trait <br>";
	}
}
trait hi{
	private function sayhello(){
		echo "Hello everyone, I am from hi_trait <br>";
	}
}

class base{
	use hello{
	hello::sayhello as public;	
	}
	use hi{
		hello::sayhello insteadof hi;
		hi::sayhello as public newhello;
	}
	/* public function sayhello(){
		echo "Hello Nishan I am from base_class<br>";
	} */
}

/* class derived extends base{
	public function sayhello(){
		echo "Hello Maruf I am from derived_class<br>";
	}
} */

/* $test = new derived();
$test->sayhello(); */
$test = new base();
$test->sayhello();
$test->newhello();

?>