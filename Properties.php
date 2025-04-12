<?php

require_once __DIR__ ."/Data/Person.php";

$person = new Person("Eko", "Subang");
$person->name = "Eko";
$person->adress = "Subang";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "adress : $person->adress" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;

$Person2 = new Person("Shura", null);
$Person2->name = "Shura";
$Person2->adress = "Jakarta";
$Person2->country = "Indonesia";