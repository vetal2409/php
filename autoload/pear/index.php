<?php
function replaceUnderscores($className) // without "\" in the begin and "()" in the end
{
    $file = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('replaceUnderscores'); // autoload by Pear class-naming standards
new Writer();

new vendor_vetal2409_shop_Product();
// It works if the "vendor" is on the same level as this file require('vendor/vetal2409/shop/Product.php');
