<?php

namespace src;

/**
 * Interface ObserverInterface
 * @package src
 */
interface ObserverInterface
{
    public function update(EventInterface $event);
}
