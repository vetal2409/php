<?php

namespace src;

/**
 * Interface SubjectInterface
 * @package src
 */
interface SubjectInterface
{
    public function attachObserver(ObserverInterface $observer);
    public function detachObserver(ObserverInterface $observer);
    public function notify(EventInterface $event);
}
