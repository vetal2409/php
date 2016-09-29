<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Furniture;
use vendor\abstracts\FurnitureFactory;

/**
 * Class ChairFactory
 * @package vendor
 */
class ChairFactory extends FurnitureFactory
{

    /**
     * @return Furniture|Chair
     */
    public function makeFurniture()
    {
        return new Chair();
    }
}
