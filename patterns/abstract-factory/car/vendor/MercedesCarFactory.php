<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\CarEngine;
use vendor\abstracts\CarFactory;
use vendor\abstracts\CarTire;
use vendor\abstracts\CarTransmission;

/**
 * Class MercedesCarFactory
 * @package vendor
 */
class MercedesCarFactory extends CarFactory
{

    /**
     * @return CarEngine
     */
    public function createEngine()
    {
        $engine = new MercedesEngine();
        $engine->setCapacity(mt_rand(30, 90));
        return $engine;
    }

    /**
     * @return CarTire
     */
    public function createTire()
    {
        $tire = new MercedesTire();
        $tire->setSize(mt_rand(12, 25));
        return $tire;
    }

    /**
     * @return CarTransmission
     */
    public function createTransmission()
    {
        $transmission = new MercedesTransmission();
        $transmission->setType('Type' . mt_rand(1, 5));
        return $transmission;
    }
}
