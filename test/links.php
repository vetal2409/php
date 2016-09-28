<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
$arr = [1, 2, 3, 4, 5, 6];
$arrLink = &$arr;
//unset($arr);
var_dump($arr);
var_dump($arrLink);
