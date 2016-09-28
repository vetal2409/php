<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Observer</title>
</head>
<body>
<h1><a href="../../">Design Patterns</a></h1>
<h2>Observer</h2>
<h3>Subject</h3>
<p>Subject have information about all his observers. It can have any count of observers 0..n. Subject provide interface
    for attaching, detaching, notifying observers.</p>
<h3>Observer</h3>
<p>Observer must provide the method for updating itself.</p>
<img src="images/uml.png" alt="">
<div>
    <p>Example1: Футбольный матч. Игра - субъект. Судья, зрители на стадионе, зрители у телевизоров - наблюдатели. Голб
        штанга - события.</p>
</div>

<div>
    <p>Example1: Логин. Логин - субъект. Логгер,.. - наблюдатели.</p>
    <img src="images/uml_login.png" alt="">
</div>

<div>
    <img src="images/results.png" alt="">
</div>

<h3>Realizations</h3>
<ul>
    <li><a href="../football">Football</a></li>
</ul>
</body>
</html>
