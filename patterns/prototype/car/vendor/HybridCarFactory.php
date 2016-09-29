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
 * Class HybridCarFactory
 * @package vendor
 */
class HybridCarFactory extends CarFactory
{
    private $engine;
    private $tire;
    private $transmission;

    /**
     * HybridCarFactory constructor.
     * @param $engine
     * @param $tire
     * @param $transmission
     */
    public function __construct(CarEngine $engine, CarTire $tire, CarTransmission $transmission)
    {
        $this->engine = $engine;
        $this->tire = $tire;
        $this->transmission = $transmission;
    }

    /**
     * @return CarEngine
     */
    public function createEngine()
    {
        return clone $this->engine;
    }

    /**
     * @return CarTire
     */
    public function createTire()
    {
        return clone $this->tire;
    }

    /**
     * @return CarTransmission
     */
    public function createTransmission()
    {
        return clone $this->transmission;
    }
}
