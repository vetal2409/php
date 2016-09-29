<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Unit;
use vendor\abstracts\UnitComposite;

/**
 * Class TroopCarrier
 * @package vendor
 */
class TroopCarrier extends UnitComposite
{
    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 100 + parent::bombardStrength();
    }

    /**
     * @param Unit $unit
     * @throws UnitException
     */
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new UnitException('A Cavalry can\'t be move to TroopCarrier');
        }
        parent::addUnit($unit);
    }


}
