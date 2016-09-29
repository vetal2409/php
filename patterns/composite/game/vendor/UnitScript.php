<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Unit;
use vendor\abstracts\UnitComposite;

/**
 * Class UnitScript
 * @package vendor
 */
class UnitScript
{
    /**
     * @param Unit $newUnit
     * @param Unit $occupyingUnit
     * @return UnitComposite
     */
    public static function joinExisting(Unit $newUnit, Unit $occupyingUnit)
    {
        /** @var UnitComposite $composite */
        if (null !== $composite = $occupyingUnit->getComposite()) {
            $composite->addUnit($newUnit);
        } else {
            $composite = new Army();
            $composite->addUnit($occupyingUnit);
            $composite->addUnit($newUnit);
        }
        return $composite;
    }

}
