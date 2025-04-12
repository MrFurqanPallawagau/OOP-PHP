<?php

require_once __DIR__ ."/data/sayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->sayGoodBye("joko");
$person->sayHello("joko");

$person->name = "FUR";
var_dump(($person));

$person->run();