<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Furniture;

/**
 * Class Chair
 * @package vendor
 */
class Chair extends Furniture
{
    /**
     * @return double
     */
    public function getPrice()
    {
        echo 50;
    }

}
