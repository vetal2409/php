<?php
use src\FootballFan;
use src\FootballTeam;

spl_autoload_register();

$team1 = new FootballTeam('Vorskla');
$fan1 = new FootballFan('German');
$fan2 = new FootballFan('Vladlen');
$fan3 = new FootballFan('Alex');


$team1->attachObserver($fan1);
$team1->attachObserver($fan2);

$team1->goalAction();

$team1->detachObserver($fan1);

$team1->goalEnemy();

$team1->attachObserver($fan3);

$team1->fightAction();
