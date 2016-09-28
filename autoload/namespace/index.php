<?php
function myNamespaceAutoload($className) // without "\" in the begin and "()" in the end
{
    if (preg_match('/\\\\/', $className)) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    }
    $path = "{$className}.php";
    if (file_exists($path)) {
        require_once($path);
    }
}

spl_autoload_register('myNamespaceAutoload'); // I think, this is the same as default
new Writer();

new \vendor\vetal2409\shop\Product();
// It works if the "vendor" is on the same level as this file require('vendor/vetal2409/shop/Product.php');
