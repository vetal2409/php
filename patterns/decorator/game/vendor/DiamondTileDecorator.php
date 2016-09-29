<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\TileDecorator;

/**
 * Class DiamondTileDecorator
 * @package vendor
 */
class DiamondTileDecorator extends TileDecorator
{
    /**
     * @return int
     */
    public function getWealth()
    {
        return $this->tile->getWealth() + 2;
    }
}
