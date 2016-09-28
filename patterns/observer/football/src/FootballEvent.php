<?php

namespace src;

/**
 * Class FootballEvent
 * @package src
 */
class FootballEvent implements EventInterface
{
    const GOAL = 'goal';
    const GOAL_ENEMY = 'goal_enemy';
    const FIGHT = 'fight';

    private $name;
    private $sender;

    /**
     * FootballEvent constructor.
     * @param $name
     * @param FootballTeam $sender
     */
    public function __construct($name, FootballTeam $sender)
    {
        $this->name = $name;
        $this->sender = $sender;
    }


    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return FootballTeam
     */
    public function getSender()
    {
        return $this->sender;
    }
}
