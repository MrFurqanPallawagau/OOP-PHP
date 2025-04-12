<?php

namespace {

require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ ."/Data/Helper.php";

$Conflict1 = new Data\One\Conflict();
$Conflict2 = new Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();
}