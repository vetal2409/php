<?php

namespace src;

/**
 * Class FootballTeam
 * @package src
 */
class FootballTeam implements SubjectInterface
{
    private $name;
    /**
     * @var ObserverInterface[]
     */
    private $observers = [];

    /**
     * FootballTeam constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function attachObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @inheritDoc
     */
    public function detachObserver(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if ($observer === $obs) {
                unset($this->observers[$key]);
                return;
            }
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function goalAction() {
        $event = new FootballEvent(FootballEvent::GOAL, $this);
        $this->notify($event);
    }

    public function goalEnemy() {
        $event = new FootballEvent(FootballEvent::GOAL_ENEMY, $this);
        $this->notify($event);
    }

    public function fightAction() {
        $event = new FootballEvent(FootballEvent::FIGHT, $this);
        $this->notify($event);
    }

    /**
     * @inheritDoc
     */
    public function notify(EventInterface $event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }
}
