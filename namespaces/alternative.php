<?php
/**
 * Alternative usage  (if you need several namespace in 1 file, but it is not recommended)
 * !!! You can't use  both type of syntax in 1 file. Either "Standard" or  "Alternative"
 */

namespace com\getinstance\until {
    class Debug
    {
        static public function helloWorld()
        {
            echo 'Hello from class Debug!<br>';
        }
    }
}

namespace main {
//    com\getinstance\until\Debug::helloWorld(); // Fatal error: Class 'main\com\getinstance\until\Debug' not found
    \com\getinstance\until\Debug::helloWorld(); // Hello from class Debug!
}


namespace {
    class Lister
    {
        static public function helloWorld()
        {
            echo 'Hello from global namespace! __NAMESPACE__ === string \' \'<br>';
        }
    }
}

namespace com\getinstance\until {
    class Lister
    {
        public static function helloWorld()
        {
            echo 'Hello from ' . __NAMESPACE__ . '<br>';
        }
    }

    Lister::helloWorld(); // Hello from com\getinstance\until
    \Lister::helloWorld(); // Hello from global namespace! __NAMESPACE__ === string ' '
}
