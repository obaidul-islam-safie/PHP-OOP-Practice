<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee salary : " . $this->salary . "<br>";
    }

}

 class manager extends employee{
     public $ta = 1000;
     public $phone = 300;
     public $totalsalary;

    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee salary : " . $this->totalsalary . "<br>";
    }
 }

$e1 = new employee("obaidul", 25, 10000);
$e2 = new manager("safie", 27, 2000);

$e1 -> info();
$e2 -> info();

?>