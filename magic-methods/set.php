<?php

class Person
{
    private $_name;
    private $_age;

    public function __set($name, $value)
    {
        $method = "set{$name}";
        if (method_exists($this, $method)) {
            return $this->$method($value);
        }
    }

    public function setName($name)
    {
        $this->_name = $name;
        if (null !== $name) {
            $this->_name = strtoupper($this->_name);
        }
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

}

$person = new Person();
$person->name = null;
$person->age = '34';
var_dump($person);