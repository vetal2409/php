<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\interfaces\ITile;

/**
 * Class Plains
 * @package vendor
 */
class Plains implements ITile
{
    private $wealth = 2;

    /**
     * @return int
     */
    public function getWealth()
    {
        return $this->wealth;
    }


}
