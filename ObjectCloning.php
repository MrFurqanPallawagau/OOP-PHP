<?php

require_once __DIR__ . "/Data/Student.php";

$student1 = new Student();
$student1->id = "";
$student1->name = "SHURA";
$student1->value = 100;
$student1->setSample("XXX");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);