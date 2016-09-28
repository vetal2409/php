<?php
namespace patterns\decorator\request;

use vendor\AuthenticateProcessRequestDecorator;
use vendor\LogProcessRequestDecorator;
use vendor\MainProcess;
use vendor\RequestHelper;
use vendor\StructureProcessRequestDecorator;

spl_autoload_register();

$requestHelper = new RequestHelper();

$mainProcess = new MainProcess();
$authenticateProcess = new AuthenticateProcessRequestDecorator($mainProcess);
$structureProcess = new StructureProcessRequestDecorator($authenticateProcess);
$logProcess = new LogProcessRequestDecorator($structureProcess);

$process = $logProcess->process($requestHelper);

echo ($process); // 2 - 4 + 2 = 0
