<?php

require_once __DIR__ . "/Data/Manager.php";

$manager = new Manager();
$manager->name = "John Doe";
$manager->sayHello("Jane Smith");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");