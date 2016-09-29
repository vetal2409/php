<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class Unit
 * @package vendor\abstracts
 */
abstract class Unit
{
    /**
     * @return null
     */
    public function getComposite()
    {
        return null;
    }
    
    /**
     * @return int
     */
    abstract public function bombardStrength();
}
