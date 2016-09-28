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
<p>Example1: Lesson - cost(), chargeType() может меняться в зависимости от CostStrategy - смотрите пример </p>
<p>Example2: Пикаперство - есть человек у которого есть метод снятьТёлочку() но в разной ситуации должна быть разная
    реализация. <br>
    class CarPickupStrategy extends PickupStrategy getWoman(){ //Подкат на машине }<br>
    Man extends Human __construct(PickupStrategy $pickupStrategy) {$this->$pickupStrategy = $pickupStrategy;}
    getWoman() {$this->pickupStrategy->getWoman()}
</p>


<h3>Realizations</h3>
<ul>
    <li><a href="../lesson">Lesson</a></li>
</ul>
</body>
</html>
