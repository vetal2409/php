<?php


class FtpModule implements Module
{
    public function setHost($host)
    {
        echo "FtpModule::setHost(): $host<br>";
    }

    public function setUser($user)
    {
        echo "FtpModule::setUser(): $user<br>";
    }

    public function execute()
    {
        //run
    }
}
