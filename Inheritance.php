<?php

require_once __DIR__ ."/Data/Manager.php";

$manager = new Manager();
$manager->name = "Eko";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Joko");