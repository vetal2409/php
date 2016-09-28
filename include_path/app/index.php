<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>include_path</title>
</head>
<body>
<h1>include_path</h1>
<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\my\xampp\domains\practice\php\book\include_path\vendor');
require_once('vetal2409/shop/Product.php');
new \vetal2409\shop\Product();
?>
</body>
</html>