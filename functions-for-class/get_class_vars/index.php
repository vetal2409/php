<?php

class Test
{
    public $simplePublic = 'public';
    public static $staticPublic = 'public static';
    private $simplePrivate = 'private';
    protected $simpleProtected = 'protected';
}

echo '<pre>';
print_r(get_class_vars('Test')); // array of public variables
echo '</pre>';
/*
 * Result:
Array
(
    [simplePublic] => public
    [staticPublic] => public static
)
*/
