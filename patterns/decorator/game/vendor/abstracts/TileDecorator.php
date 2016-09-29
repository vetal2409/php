<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

use vendor\interfaces\ITile;

/**
 * Class TileDecorator
 * @package vendor\abstracts
 */
abstract class TileDecorator implements ITile
{
    protected $tile;

    /**
     * TileDecorator constructor.
     * @param ITile $tile
     */
    public function __construct(ITile $tile)
    {
        $this->tile = $tile;
    }
}
