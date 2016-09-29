<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\Furniture;
use vendor\abstracts\FurnitureFactory;

/**
 * Class TableFactory
 * @package vendor
 */
class TableFactory extends FurnitureFactory
{

    /**
     * @return Furniture|Table
     */
    public function makeFurniture()
    {
        $table = new Table();
        $table->setWidth(200 + mt_rand(1, 40) * 10);
        $table->setHeight(200);
        $table->setLength(150);
        $table->addMaterial('Wood');
        $table->addMaterial('plastic');
        return $table;
    }
}
