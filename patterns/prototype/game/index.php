<?php
namespace patterns\prototype\game;

use vendor\EarthForest;
use vendor\EarthSea;
use vendor\MarsPlains;
use vendor\TerrainFactory;

spl_autoload_register();

$terrainFactory = new TerrainFactory(new EarthSea(), new MarsPlains(), new EarthForest());

var_dump($terrainFactory);
