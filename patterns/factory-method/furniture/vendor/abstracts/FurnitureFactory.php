<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class FurnitureFactory
 * @package vendor\abstracts
 */
abstract class FurnitureFactory
{
    /**
     * @return Furniture
     */
    abstract public function makeFurniture();
}
