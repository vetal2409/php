<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 * Date: 3/17/2016
 */
namespace vendor\abstracts;

/**
 * Class Lesson
 * @package vendor\abstracts
 */
abstract class Lesson
{
    private $duration;
    private $costStrategy;

    /**
     * Lesson constructor.
     * @param $duration
     * @param CostStrategy $costStrategy
     */
    public function __construct($duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }

    /**
     * @return int
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
