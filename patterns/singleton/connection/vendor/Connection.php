<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use PDO;

/**
 * Class Connection
 * @package vendor
 */
class Connection
{
    private static $instance;

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
            self::$instance = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        }
        return self::$instance;
    }
}
