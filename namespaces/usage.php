<?php
namespace com;

require_once 'samples/with_namespace.php';

getinstance\until\Debug::helloWorld(); // ***
\com\getinstance\until\Debug::helloWorld();
/*
"\" - this symbol in the begin of namespace (not "use") means we will lok for  class in the global namespace
otherwise in "com"

*** If you use "use" for define namespace, interpreter always looks for it starting GLOBAL namespace
(Even if there are not "\" in the begin)
*/