<?php

class Address
{
    private $number;
    private $street;

    public function __construct($maybeNumber, $maybeStreet = null)
    {
        if (is_null($maybeStreet)) {
            $this->streetAddress = $maybeNumber;
        } else {
            $this->number = $maybeNumber;
            $this->street = $maybeStreet;
        }
    }

    public function __get($name)
    {
        if ($name === 'streetAddress') {
            return $this->number . ' ' . $this->street;
        }
    }

    public function __set($name, $value)
    {
        if ($name === 'streetAddress') {
            if (preg_match('/^(\d+.*?)[\s,]+(.+)$/', $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new Exception("Error in the address: '{$value}'");
            }
        }
    }
}

$address = new Address('24 Mira');
echo "Address: {$address->streetAddress}";

var_dump($address);

$address = new Address('9/7', 'Bogdana Hmelnytchkogo');
echo "Address: {$address->streetAddress}";
