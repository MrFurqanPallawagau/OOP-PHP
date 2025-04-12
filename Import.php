<?php

require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ ."/Data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$Conflict1 = new Conflict();
$Conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
