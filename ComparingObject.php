<?php

require_once __DIR__ . "/Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "SHURA";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "SHURA";
$student2->value = 100;

var_dump($student1 == $student2); // true
var_dump($student1 === $student2); // false
var_dump($student1 === $student1); 