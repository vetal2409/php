<?php


class PersonModule implements Module
{
    public function setPerson(Person $person)
    {
        echo "FtpModule::setPerson(): {$person->name}<br>";
    }

    public function execute()
    {
        //run
    }
}
