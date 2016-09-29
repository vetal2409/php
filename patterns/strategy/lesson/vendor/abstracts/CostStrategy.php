<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 * Date: 3/17/2016
 */
namespace vendor\abstracts;

/**
 * Class CostStrategy
 * @package vendor\abstracts
 */
abstract class CostStrategy
{
    /**
     * @param Lesson $lesson
     * @return int
     */
    abstract public function cost(Lesson $lesson);

    /**
     * @return string
     */
    abstract public function chargeType();
}
