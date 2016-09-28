<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */

use vendor\HybridCarFactory;
use vendor\MercedesCarFactory;
use vendor\ToyotaCarFactory;

spl_autoload_register();
spl_autoload_register(function ($className) {
    if (preg_match('/\\\\/', $className)) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    }
    $path = dirname(dirname(__DIR__)) . "/abstract-factory/car/{$className}.php";
    if (file_exists($path)) {
        require_once($path);
    }
});


$toyotaFactory = new ToyotaCarFactory();
$mercedesFactory = new MercedesCarFactory();
$hybridCarFactory = new HybridCarFactory(
    $mercedesFactory->createEngine(),
    $toyotaFactory->createTire(),
    $mercedesFactory->createTransmission()
);

//Гибридная машинная фабрика делает делает машини из двигателя и трансмиссии от мерседессаа а шини от тоёты
var_dump($hybridCarFactory->createEngine());
var_dump($hybridCarFactory->createTire());
var_dump($hybridCarFactory->createTransmission());
