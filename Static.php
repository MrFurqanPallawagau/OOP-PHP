<?php
require_once __DIR__ . '/Helper/MathHelper.php';

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL; // MathHelper

MathHelper::$name = "Shura";
echo MathHelper::$name . PHP_EOL; // Shura

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result: $result" . PHP_EOL; // Result: 50