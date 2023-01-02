<?php
include 'database.php';

$obj = new database();
$obj->update('students',['age'=>'25','city'=>'Tongi'],'id="4"');
echo "update result is :";
print_r($obj->getReasult());
?>