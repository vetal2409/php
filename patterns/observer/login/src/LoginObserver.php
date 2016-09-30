<?php

namespace src;

use SplObserver;
use SplSubject;

/**
 * Class LoginObserver
 * @package src
 */
abstract class LoginObserver implements SplObserver
{
    private $login;

    /**
     * LoginObserver constructor.
     * @param $login
     */
    public function __construct(Login $login)
    {
        $this->login = $login;
        $this->login->attach($this);
    }

    public function update(SplSubject $subject)
    {
        if ($subject === $this->login) {
            $this->doUpdate($subject);
        }
    }

    abstract public function doUpdate(Login $subject);
}
