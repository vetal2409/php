<?php
namespace patterns\decorator\game;

use vendor\DiamondTileDecorator;
use vendor\Plains;
use vendor\PollutedTileDecorator;

spl_autoload_register();

$wealth = (new DiamondTileDecorator(new PollutedTileDecorator(new Plains())))->getWealth();

var_dump($wealth); // 2 - 4 + 2 = 0
