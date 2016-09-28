<?php

class Person
{
    public function getName()
    {
        return 'Ivan';
    }

    public function getAge()
    {
        return 44;
    }

    public function __toString()
    {
        return "{$this->getName()} is {$this->getAge()} years old.";
    }
}

$person = new Person();
echo $person;