<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\TileDecorator;

/**
 * Class PollutedTileDecorator
 * @package vendor
 */
class PollutedTileDecorator extends TileDecorator
{

    /**
     * @return int
     */
    public function getWealth()
    {
        return $this->tile->getWealth() - 4;
    }
}
