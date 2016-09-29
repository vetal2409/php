<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Furniture;

/**
 * Class Table
 * @package vendor
 */
class Table extends Furniture
{
    /**
     * @return double
     */
    public function getPrice()
    {
        return 100;
    }
}
