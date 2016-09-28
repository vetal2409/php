<?php

namespace src;

/**
 * Interface EventInterface
 * @package src
 */
interface EventInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return SubjectInterface
     */
    public function getSender();
}
