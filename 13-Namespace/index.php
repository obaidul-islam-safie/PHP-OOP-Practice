<?php
require 'product.php';
require 'testing.php';
use pro as product;
$test = new product\product();

function wow(){
    echo "Wow from index file<br>";
}

wow();
pro\wow();
?>