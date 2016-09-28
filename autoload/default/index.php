<?php
/*
 * Default autoload supports namespaces!
 * */
spl_autoload_register();
new Writer();

new \vendor\vetal2409\shop\Product();
// It works if the "vendor" is on the same level as this file require('vendor/vetal2409/shop/Product.php');
