<?php
//require "first.php";
//require "second.php";
spl_autoload_register(function($class){
    require_once($class . '.php');
});

$test = new first();
$test1 = new Second();
?>