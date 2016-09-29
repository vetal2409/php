<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class CarFactory
 * @package vendor\abstracts
 */
abstract class CarFactory
{
    /**
     * @return CarEngine
     */
    abstract public function createEngine();

    /**
     * @return CarTire
     */
    abstract public function createTire();

    /**
     * @return CarTransmission
     */
    abstract public function createTransmission();
}
