<?php

interface SuperBasicInterface
{

}

interface BasicInterface extends SuperBasicInterface
{

}

abstract class Basic
{

}


abstract class Car extends Basic implements BasicInterface
{
    public $engine;

    abstract protected function run();

    protected function test()
    {
        echo 'Testing car...<br>';
    }
}

class SportCar extends Car
{
    public function run()
    {
        $this->test();
        echo 'The SportCar has just run!<br>';

    }
}

$car = new SportCar();
$car->run();
