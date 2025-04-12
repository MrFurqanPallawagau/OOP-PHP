<?php

require_once __DIR__."/Data/Person.php";

$eko = new Person("Eko", "Subang");
$eko->name = "Eko";
$eko->sayHeloo("Budi");

$jojo = new Person("Jojo", null);
$jojo->name = "Jojo";
$jojo->sayHeloo("");

$eko->info();
$jojo->info();





