<?php
spl_autoload_register();
$configData = [
    'PersonModule' => [
        'person' => 'Bob'
    ],
    'FtpModule' => [
        'host' => 'example.com',
        'user' => 'anon'
    ]
];
$test = new ModuleRunner($configData);
$test->init();
var_dump($test);
