<?php
function replaceUnderscores($className) // without "\" in the begin and "()" in the end
{
    $file = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

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

spl_autoload_register('replaceUnderscores'); // autoload by Pear class-naming standards
spl_autoload_register('myNamespaceAutoload'); // I think, this is the same as default

new Writer();

new vendor_vetal2409_shop_Good();
// It works if the "vendor" is on the same level as this file require('vendor/vetal2409/shop/Product.php');
//curr namespace + vendor..

new \vendor\vetal2409\shop\Product();
// It works if the "vendor" is on the same level as this file require('vendor/vetal2409/shop/Product.php');
//global namespace + \vendor...
