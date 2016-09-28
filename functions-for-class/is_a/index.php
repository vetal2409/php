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
if (is_a($product, 'main\CDProduct')) { // PHP  4 - 5 && 5.3+    5.0 - 5.3 is deprecated
    echo '$product -- is a main\CDProduct<br>';
}
