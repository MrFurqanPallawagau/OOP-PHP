<?php

require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ ."/Data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$Conflict1 = new Conflict1();
$Conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;
