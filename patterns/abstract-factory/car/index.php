<?php
namespace patterns\abstrFactory\car;

use vendor\abstracts\CarEngine;
use vendor\abstracts\CarFactory;
use vendor\abstracts\CarTire;
use vendor\abstracts\CarTransmission;
use vendor\MercedesCarFactory;
use vendor\ToyotaCarFactory;

spl_autoload_register();

/*
 * Зфдача:
 * 1) Создаь 3 двигателя компании мерседес
 * 2) Создать 2 трансмиссий компании тойота
 * 3) Создать 2 шини компании тоета
 * 3) Создать 3 трансмиссии компании мерседес
 * 4) Создать 1 двигатель компании тоета
 * 5) Вывести всю инфу на экран
 */

$mercedesFactory = new MercedesCarFactory();
$toyotaFactory = new ToyotaCarFactory();

/**
 * @var CarEngine $engine []
 * @var CarTire $tire []
 * @var CarTransmission $transmission []
 */
$engines = [];
$tires = [];
$transmissions = [];

/**
 * @param CarFactory $carFactory
 * @param $number
 * @param $type
 */
function addSpare(CarFactory $carFactory, $number, $type)
{
    global ${$type . 's'};
    for ($i = 0; $i < $number; $i++) {
        ${$type . 's'}[] = $carFactory->{'create' . $type}();
    }
}

addSpare($mercedesFactory, 3, 'engine');
addSpare($toyotaFactory, 2, 'transmission');
addSpare($toyotaFactory, 2, 'tire');
addSpare($mercedesFactory, 3, 'transmission');
addSpare($toyotaFactory, 1, 'engine');


?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cars</title>
        <style>
            table {
                border-collapse: collapse;
            }

            table tr td {
                border: 1px solid #000;
            }
        </style>
    </head>
    <body>
    <h1>Engines</h1>
    <?php if (count($engines)) : ?>
        <table>
            <?php foreach ($engines as $engine) : ?>
                <tbody>
                <tr>
                    <td>Spare</td>
                    <td>Engine</td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><?= get_class($engine) ?></td>
                </tr>
                <tr>
                    <td>Capacity</td>
                    <td><?= $engine->getCapacity() ?></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    <?php endif ?>


    <h1>Tires</h1>
    <?php if (count($tires)) : ?>
        <table>
            <?php foreach ($tires as $tire) : ?>
                <tbody>
                <tr>
                    <td>Spare</td>
                    <td>Tire</td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><?= get_class($tire) ?></td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td><?= $tire->getSize() ?></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    <?php endif ?>


    <h1>Transmissions</h1>
    <?php if (count($transmissions)) : ?>
        <table>
            <?php foreach ($transmissions as $transmission) : ?>
                <tbody>
                <tr>
                    <td>Spare</td>
                    <td>Tire</td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td><?= get_class($transmission) ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?= $transmission->getType() ?></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    <?php endif ?>
    </body>
    </html>
