<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abstract Factory</title>
</head>
<body>
<h1><a href="../../">Design Patterns</a></h1>
<h2>Abstract Factory</h2>
<p>Example1(light): PDO::connect() - generate object which realize abstract interface(It depends on connect-type -
    mysql,mysqli, sqlite) </p>
<p>Example2(light): NotifierFactory::getNotifier() - generate object which realize abstract interface(It depends on
    notifier-type - sms,
    mail)</p>


<h3>Realizations</h3>
<ul>
    <li><a href="../car">Car</a></li>
</ul>
</body>
</html>
