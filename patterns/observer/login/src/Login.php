<?php

namespace src;

use SplObjectStorage;
use SplObserver;
use SplSubject;

/**
 * Class Login
 * @package src
 */
class Login implements SplSubject
{

    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    private $observers;
    private $status = [];

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function handleLogin($user, $pass, $ip)
    {
        $isValid = false;
        switch (mt_rand(1, 3)) {
            case Login::LOGIN_USER_UNKNOWN:
                $this->setStatus(Login::LOGIN_USER_UNKNOWN, $user, $ip);
                $isValid = true;
                break;
            case Login::LOGIN_WRONG_PASS:
                $this->setStatus(Login::LOGIN_WRONG_PASS, $user, $ip);
                break;
            case Login::LOGIN_ACCESS:
                $this->setStatus(Login::LOGIN_ACCESS, $user, $ip);
                break;
        }
        $this->notify();
        return $isValid;
    }

    public function notify()
    {
        /**
         * @var SplObserver $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     * @param $user
     * @param $ip
     */
    public function setStatus($status, $user, $ip)
    {
        $this->status = [$status, $user, $ip];
    }
}
