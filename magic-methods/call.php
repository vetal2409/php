<?php

class PersonWriter
{
    public function writeName(Person $p)
    {
        echo $p->getName();
    }

    public function writeAge(Person $p)
    {
        echo $p->getAge();
    }
}

class Person
{
    private $writer;

    public function __construct(PersonWriter $writer)
    {
        $this->writer = $writer;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->writer, $name)) {
            $this->writer->$name($this);
        }
    }

    public function getName()
    {
        return 'Vitalii';
    }

    public function getAge()
    {
        return 23;
    }
}

$person = new Person(new PersonWriter());
$person->writeName(1,2);
echo ', ';
$person->writeAge();