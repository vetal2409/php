<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use PDO;

/**
 * Class Preferences
 * @package vendor
 */
class Preferences
{
    private static $instance;
//    prote
//todo
    /**
     * Closed constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Closed clone
     */
    protected function __clone()
    {
    }

    /**
     * @return PDO
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static;
        }
        return self::$instance;
    }
}
