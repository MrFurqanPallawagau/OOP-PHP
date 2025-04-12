<?php

require_once __DIR__ . "/Data/Conflict.php";
require_once __DIR__ ."/Data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict = new Conflict1;
$Dummy = new Dummy();
$sample = new Sample();