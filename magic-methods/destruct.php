<?php

class Person
{
    private $name;
    private $age;
    private $id;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function __destruct()
    {
        if (!empty($this->id)) {
            echo 'We are written data to DB..';
        }
    }
}

$person = new Person('Ivan', '44');
$person->setId(343);
//unset($person);
//$person1 = 5;