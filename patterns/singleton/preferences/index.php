<?php
namespace patterns\singleton\db;

use vendor\Connection;

spl_autoload_register();

$connection = Connection::getInstance();

print_r($connection);
