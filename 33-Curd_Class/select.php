<?php
include 'database.php';

$obj = new database();
$obj->select('students', 'name,city',null,'city="Tongi"',null,null);
echo "Select result is :";
print_r($obj->getReasult());
/* $obj->sql('SELECT * FROM students WHERE age = "25"');
echo "Sql result is :";
print_r($obj->getReasult()); */
?>