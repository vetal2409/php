<?php

class Account
{
    public $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

/**
 * Class Person
 * @property Account $account
 */
class Person
{
    private $name;
    private $age;
    private $id;
    public $account;

    public function __construct($name, $age, Account $account)
    {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        $this->id = 0;
        $this->account = clone $this->account;
    }

}

$person = new Person('Ivan', '44', new Account(200));
$person->setId(343);
$personTwin = clone $person;
$person->account->balance +=10;

var_dump($person);
var_dump($personTwin);