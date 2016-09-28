<?php
$className = 'Task';

$path = "{$className}.php";
if (!file_exists($path)) {
    throw new Exception("File {$className} is not found.");
}


require_once($path);
$qClassName = "tasks\\{$className}";

if (!class_exists($qClassName)) {
    throw new Exception("Class {$qClassName} is not found.");
}

/* @var \tasks\Task $myObj */
$myObj = new $qClassName();
$myObj->doSpeak();
