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

    public function __isset($name)
    {
        $method = "get{$name}";
        return method_exists($this, $method);
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
if (isset($person->name, $person->age)) {
    echo $person->name . ', ' . $person->age;
}
