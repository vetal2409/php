<?php

class Product
{
    public function getTitle()
    {
        echo 'Called method from class "Product"';
    }
}

$product = new Product();
$method = 'getTitle';
if (method_exists($product, $method)) { //True if private or protected
    echo $product->$method(); // Here will be error if method private or protected
} else {
    echo "Method '$method' is not callable.";
}
