<?php
class employe{
	public $Name;
	public $Age;
	Public $Salary;
	function __construct($n,$a,$s){
		$this->Name=$n;
		$this->Age=$a;
		$this->Salary=$s;
	}
	
	function info(){
		echo "<h3>Employe Profile :</h3>";
		echo "Employe Name : ".$this->Name."<br>";
		echo "Employe Age : ".$this->Age."<br>";
		echo "Employe Salary : ".$this->Salary."<br>";
	}
}
class manager extends employe{
	public $ta = 3000;
	public $phone = 1000;
	public $total_salary;
	
	function info(){
		$this->total_salary = $this->Salary+$this->ta+$this->phone;
		echo "<h3>Manager Profile :</h3>";
		echo "Manager Name : ".$this->Name."<br>";
		echo "Manager Age : ".$this->Age."<br>";
		echo "Manager Salary : ".$this->total_salary."<br>";
	}
}
$e1 = new employe("Maruf",23,10000);
$e2 = new manager("Nishan",27,1000000);
echo $e1->info();
echo $e2->info();

?>