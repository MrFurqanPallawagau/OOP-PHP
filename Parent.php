<?php

require_once  __DIR__ .'/Data/Shape.php';

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorners() . PHP_EOL; // 4

$Rectangle = new Rectangle();
echo $Rectangle->getCorners() . PHP_EOL;