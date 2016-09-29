<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class Car
 * @package vendor\abstracts
 */
abstract class CarEngine
{
    protected $capacity;

    /**
     * @return float
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param float $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }
}
