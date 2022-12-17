<?php

include 'database.php';

$obj = new Database();

$obj-> insert('student', ['id'=>'183152286','name'=>'safie islam']);
echo "Insert result is : ";
print_r($obj->getResult());


?>