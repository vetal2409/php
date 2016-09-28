<?php
namespace patterns\strategy\lesson;

use vendor\abstracts\Lesson;
use vendor\FixedCostStrategy;
use vendor\Lecture;
use vendor\Seminar;
use vendor\TimeCostStrategy;

spl_autoload_register();

$lessons = [
    new Lecture(80, new FixedCostStrategy()),
    new Seminar(60, new TimeCostStrategy()),
];

if (count($lessons)) {
    /**
     * @var Lesson $lesson []
     */
    foreach ($lessons as $lesson) {
        echo 'Charge type: ' . $lesson->chargeType() . ' Cost: ' . $lesson->cost() . '<br>';
    }
}
