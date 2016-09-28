<?php
namespace patterns\factoryMethod\furniture;

use vendor\TableFactory;

spl_autoload_register();

$furnitureFactory = new TableFactory();

$numberFurnitureToCreate = 5;
for ($i = 0; $i < $numberFurnitureToCreate; $i++) {
    $furniture = $furnitureFactory->makeFurniture();
    echo 'Object: ' . get_class($furniture) . '<br>';
    echo 'Price: ' . $furniture->getPrice() . '$<br>';
    echo 'Height: ' . $furniture->getHeight() . ' mm<br>';
    echo 'Width: ' . $furniture->getWidth() . ' mm<br>';
    echo 'Length: ' . $furniture->getLength() . ' mm<br>';
    echo 'Materials: ' . $furniture->getMaterials() . '<br>';
    echo '<hr>';
}
