<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 * Date: 3/17/2016
 */
namespace vendor;

use vendor\abstracts\CostStrategy;
use vendor\abstracts\Lesson;

/**
 * Class TimeCostStrategy
 * @package vendor
 */
class TimeCostStrategy extends CostStrategy
{
    private $payRate = 2;

    /**
     * @param Lesson $lesson
     * @return int
     */
    public function cost(Lesson $lesson)
    {
        return $this->payRate * $lesson->getDuration();
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return 'Time cost!';
    }
}
