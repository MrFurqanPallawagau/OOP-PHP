<?php

$array = [
  "firstname" => "Fur",
  "middlename" => "shura",
  "lastname" => "Akki"
];

$object = (object) $array;

var_dump($object); // object(stdClass)#1 (3) { ["firstname"]=> string(3) "Fur" ["middlename"]=> string(5) "shura" ["lastname"]=> string(4) "Akki" }

echo "Firstname : $object->firstname" . PHP_EOL; // Firstname: Fur
echo "Middlename : $object->middlename" . PHP_EOL; // Middlename: shura
echo "Lastname : $object->lastname" . PHP_EOL; // Lastname: Akki

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once __DIR__ . '/Data/Person.php';

$person = new Person("Fur", "shura",);
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);