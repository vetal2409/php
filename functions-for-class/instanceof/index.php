<?php
namespace main;

class CDProduct
{
}

function getProduct()
{
    return new CDProduct();
}

$product = getProduct();
if ($product instanceof CDProduct) { // already in "main" namespace PHP 5.0+
    echo '$product -- instance of main\CDProduct<br>';
}
