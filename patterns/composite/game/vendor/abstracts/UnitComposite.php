<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class UnitComposite
 * @package vendor\abstracts
 */
abstract class UnitComposite extends Unit
{
    private $units = [];

    /**
     * @return $this
     */
    public function getComposite()
    {
        return $this;
    }

    /**
     * @return int
     */
    public function bombardStrength()
    {
        $result = 0;
//        array_map(function($unit) use ($result) {
//            $result += $unit->bombardStreigth;
//        }, $this->units);
//        return $result;
        foreach ($this->units as $unit) {
            $result += $unit->bombardStrength();
        }
        return $result;
    }

    /**
     * @param Unit $unit
     */
    public function addUnit(Unit $unit)
    {
        if ($this->isUnitExist($unit) === false) {
            $this->units[] = $unit;
        }
    }

    /**
     * @param Unit $unit
     * @return bool
     */
    public function isUnitExist(Unit $unit)
    {
        foreach ($this->units as $unitExisted) {
            if ($unit === $unitExisted
                || ($unitExisted instanceof UnitComposite && $unitExisted->isUnitExist($unit) === true)
            ) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param Unit $unit
     */
    public function removeUnit(Unit $unit)
    {
        if (($key = array_search($unit, $this->units, true)) !== false) {
            unset($this->units[$key]);
        } else {
            foreach ($this->units as $unitExisted) {
                if ($unitExisted instanceof UnitComposite) {
                    $unitExisted->removeUnit($unit);
                }
            }
        }

    }

    /**
     * @return Unit[]
     */
    public function getUnits()
    {
        return $this->units;
    }
}
