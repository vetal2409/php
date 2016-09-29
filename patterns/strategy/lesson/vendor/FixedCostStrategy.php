<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 * Date: 3/17/2016
 */
namespace vendor;

use vendor\abstracts\CostStrategy;
use vendor\abstracts\Lesson;

/**
 * Class FixedCostStrategy
 * @package vendor
 */
class FixedCostStrategy extends CostStrategy
{

    /**
     * @param Lesson $lesson
     * @return int
     */
    public function cost(Lesson $lesson)
    {
        return 30;
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return 'Fixed cost!';
    }
}
