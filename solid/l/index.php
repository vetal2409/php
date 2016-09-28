<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liskov substitution principle - Принцип подстановки Барбары Лисков</title>
</head>
<body>
<h1><a href="../">SOLID</a></h1>
<h2>Liskov substitution principle (LSP) - Принцип подстановки Барбары Лисков</h2>
<p>Поведения наследуемых классов не должно противоречить поведению заданному базовым классом. Тоесть, поведения
    наследуемых классов должно быть ожидаемым для кода который использует базовый класс.</p>


<p>Пример нарушения принципа - в каком-то методе базового класса мы возвращили число, допустим, это скорость полёта
    птици, но вдруг, при реализации дочернего класса "Пингвин", мы возвращаем не чило, а строку, с сообщение об
    ошибке, чего клиент и вовсе не ожидает.</p>

<p>Так же один с вариантов когда мы возвращаем процент от чего-то(%) вместо его колличества.</p>
</body>
</html>