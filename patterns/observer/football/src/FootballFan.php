<?php

namespace src;

/**
 * Class FootballFan
 * @package src
 */
class FootballFan implements ObserverInterface
{
    private $name;

    /**
     * FootballFan constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param EventInterface|FootballEvent $event
     */
    public function update(EventInterface $event)
    {
        switch ($event->getName()) {
            case FootballEvent::GOAL:
                printf('GOAL! <b>%s</b> is happy for  team <b>%s</b><br>', $this->getName(),
                    $event->getSender()->getName());
                break;
            case FootballEvent::GOAL_ENEMY:
                printf('Goal enemy:( <b>%s</b> is upset. Judge is bad!!! Team: <b>%s</b><br>', $this->getName(),
                    $event->getSender()->getName());
                break;
            case FootballEvent::FIGHT:
                printf('<b>%s</b> crush a chair and hit neighbor on the head!<br>', $this->getName());
                break;
            default:
                printf('<b>%s</b> can\'t react on event. Unknown event: <b>%s</b>', $this->getName(),
                    $event->getName());
        }
    }

}
