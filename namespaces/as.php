<?php
namespace main;

require_once 'samples/with_namespace.php';
use com\getinstance\until\Debug as uDebug; // "as" can resolve our alias conflicts

class Debug
{
    static public function helloWorld()
    {
        echo 'Hello from class main\Debug!<br>';
    }
}

Debug::helloWorld(); //Hello from class main\Debug!
uDebug::helloWorld(); //Hello from class Debug!