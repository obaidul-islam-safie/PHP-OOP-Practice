<?php
include 'database.php';

$obj = new database();
$obj->delete('students','age="20"');
echo "Delete result is :";
print_r($obj->getReasult());
?>