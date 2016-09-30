<?php

namespace src;

/**
 * Class SecurityMonitor
 * @package src
 */
class SecurityMonitor extends LoginObserver
{

    public function doUpdate(Login $subject)
    {
        $status = $subject->getStatus();
        if ($status[0] === Login::LOGIN_WRONG_PASS) {
            printf('%s:    Send email to system administrator.', __CLASS__);
        }
    }
}
