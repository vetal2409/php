<?php
namespace main;

require_once 'samples/with_namespace.php';

use com\getinstance\until; //this creates alias to another namespace "until"
until\Debug::helloWorld();

use com\getinstance\until\Debug; //If we need only 1 class from namespace we can import only this class
Debug::helloWorld();