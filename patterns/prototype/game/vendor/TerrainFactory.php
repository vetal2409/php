<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Forest;
use vendor\abstracts\Plains;
use vendor\abstracts\Sea;

/**
 * Class TerrainFactory
 * @package vendor
 */
class TerrainFactory
{
    private $sea;
    private $plains;
    private $forest;

    /**
     * TerrainFactory constructor.
     * @param $sea
     * @param $plains
     * @param $forest
     */
    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    /**
     * @return Sea
     */
    public function getSea()
    {
        return clone $this->sea;
    }

    /**
     * @return Plains
     */
    public function getPlains()
    {
        return clone $this->plains;
    }

    /**
     * @return Forest
     */
    public function getForest()
    {
        return clone $this->forest;
    }
}
