<?php

/**
 * @property  $name
 * @property  $age
 */
class Person
{
    public function __get($name)
    {
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function getName()
    {
        return 'Ivan';
    }

    public function getAge()
    {
        return 44;
    }
}

$person = new Person();
echo $person->name . ', ' . $person->age;