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
if (get_class($product) === 'main\CDProduct') {
    echo '$product -- object of class main\CDProduct<br>';
}
