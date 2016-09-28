<?php
namespace patterns\factoryMethod\furniture;

use vendor\Archer;
use vendor\Army;
use vendor\Cavalry;
use vendor\TroopCarrier;
use vendor\UnitScript;
use vendor\Wizard;

spl_autoload_register();

$wizard0 = new Wizard();
$army0 = UnitScript::joinExisting(new Archer(), $wizard0);  // + 11 straight
/* Result $army0: 11 straight */


$army1 = new Army();
$archer = new Archer();
$wizard = new Wizard();
UnitScript::joinExisting($archer, $army1);  // + 5 straight
UnitScript::joinExisting(new Archer(), $army1);  // + 5 straight
UnitScript::joinExisting($wizard, $army1);  // + 6 straight
UnitScript::joinExisting($archer, $army1);  // + 0 straight  we already have this unit in our $army1
UnitScript::joinExisting($army0, $army1);  // + 11 straight
/* Result $army1: 27 straight */

$troopCarrier = new TroopCarrier();  // + 100 straight
UnitScript::joinExisting(new Wizard(), $troopCarrier);  // + 6 straight
//UnitScript::joinExisting(new Cavalry(), $troopCarrier); // UnitException "A Cavalry can't be move to TroopCarrier"
/* Result $troopCarrier: 106 straight */



$armyMain = new Army();
UnitScript::joinExisting(new Wizard(), $armyMain);  // + 6 straight
UnitScript::joinExisting($troopCarrier, $armyMain);  // + 106 straight
UnitScript::joinExisting($army1, $armyMain);  // + 27 straight
/* Result $armyMain: 139 straight */


UnitScript::joinExisting($wizard0, $armyMain);  // + 0 straight  we already have this arther in $army0
$armyMain->removeUnit($wizard0);  // -6 straight
UnitScript::joinExisting($archer, $armyMain);  // + 0 straight  we already have this arther in $army1
$armyMain->removeUnit($wizard);  // -6 straight
/* Result $armyMain: 127 straight */



var_dump($armyMain->bombardStrength());


$armyNew = UnitScript::joinExisting(new Archer(), new Wizard()); // 127

var_dump($armyNew->bombardStrength());
