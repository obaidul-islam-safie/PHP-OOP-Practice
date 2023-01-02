<?php
include 'database.php';

$obj = new database();
$obj->insert('students',['name'=>'Sabbir','age'=>'23','city'=>'Tangail']);
echo "Insert reasult is :";
print_r($obj->getReasult());
?>