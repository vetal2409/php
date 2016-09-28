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
if (is_callable(array($product, $method))) { //False if private or protected
    echo $product->$method();
} else {
    echo "Method '$method' is not callable.";
}
