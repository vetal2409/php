<?php

interface SomeInterface
{

}
interface SomeAnotherInterface
{

}

class Product implements SomeInterface, SomeAnotherInterface
{
}

$product = new Product();

if (in_array('SomeAnotherInterface', class_implements($product), true)) {
    echo 'Class Product implements SomeAnotherInterface<br>';
}

if (in_array('SomeAnotherInterface', class_implements('Product'), true)) {
    echo 'Class Product implements SomeAnotherInterface<br>';
}

if ($product instanceof Product) {
    echo 'Class Product implements SomeAnotherInterface<br>';
}
/*
 * Result:
Class Product implements SomeAnotherInterface
Class Product implements SomeAnotherInterface
Class Product implements SomeAnotherInterface
*/
