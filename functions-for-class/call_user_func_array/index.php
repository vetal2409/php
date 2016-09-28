<?php

class PersonWriter
{
    function writeName(Person $p, $middleName, $lastName)
    {
        echo $lastName . ' ' . $p->getName() . ' ' . $middleName;
    }

    function writeAge(Person $p)
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
//            $this->writer->$name($this);
            array_unshift($arguments, $this);
            call_user_func_array(array($this->writer, $name), $arguments); //!! array of parameters VERY useful
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
$person->writeName('Vladimirovich', 'Sydorenko');
echo ', ';
$person->writeAge();

/*
 * Result:
Sydorenko Vitalii Vladimirovich, 23
 */
