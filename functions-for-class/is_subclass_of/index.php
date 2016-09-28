<?php

interface SomeInterface
{

}

class First
{
}

class Second extends First implements SomeInterface
{
}

class Third extends Second
{
}

$first = new First();
$second = new Second();
$third = new Third();

var_dump(is_subclass_of($third, 'Second'));
var_dump(is_subclass_of($third, 'First'));
var_dump(is_subclass_of($second, 'SomeInterface')); // 5.3.7	Added support for class_name to work with interfaces
var_dump(is_subclass_of($third, 'SomeInterface')); // 5.3.7	Added support for class_name to work with interfaces

/*
 * Result:
string 'Second' (length=6)
boolean true
boolean true
boolean true
boolean true
*/
