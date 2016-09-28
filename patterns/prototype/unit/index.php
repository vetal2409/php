<?php

/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
class Unit
{
    private $hp;
    private $attack;
    private $defence;

    /**
     * Unit constructor.
     * @param $hp
     * @param $attack
     * @param $defence
     */
    public function __construct($hp, $attack, $defence)
    {
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defence = $defence;
    }

    public function upgrade()
    {
        $this->hp++;
        $this->attack++;
        $this->defence++;
    }
}

/**
 * Class Barrack
 */
class Barrack
{
    private $unit;

    /**
     * Barrack constructor.
     * @param Unit $unit
     */
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return Unit
     */
    public function createUnit()
    {
        return clone $this->unit;
    }
}

$unit = new Unit(50, 10, 5);
$barrack = new Barrack($unit);

$new1 = $barrack->createUnit();
$unit->upgrade();
$unit->upgrade();
$new2 = $barrack->createUnit();
$unit->upgrade();

var_dump($new1);
var_dump($new2);
