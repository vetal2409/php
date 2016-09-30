<?php
use src\Login;
use src\SecurityMonitor;

spl_autoload_register();

$login = new Login();
$securityMonitor = new SecurityMonitor($login);
$login->handleLogin('vetal2409', 'pass', '127.0.0.1');
