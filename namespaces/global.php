<?php
namespace com\getinstance\until;

require_once 'samples/without_namespace.php';

class Lister
{
    static public function helloWorld()
    {
        echo 'Hello from ' . __NAMESPACE__ . '<br>';
    }
}

Lister::helloWorld();
\Lister::helloWorld();