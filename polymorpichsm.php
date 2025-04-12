<?php

require_once __DIR__. "/Data/Programmer.php";

$company = new company();
$company->programmer = new Programmer("Eko");
var_dump($company);
$company->programmer = new BackendProgrammer("Eko");
var_dump($company);
$company->programmer = new FrontendProgrammer("FUR");
var_dump($company);

sayHelloProgrammer(new Programmer("Eko"));
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FrontendProgrammer(""));