<?php

require_once __DIR__ .'/Data/Food.php';
require_once __DIR__ .'/Data/Animal.php';
require_once __DIR__ .'/Data/AnimalShelter.php';

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt('luna');
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt('Doggy');
$dog->eat(new \Data\AnimalFood());