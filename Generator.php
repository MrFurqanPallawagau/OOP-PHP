<?php

function getGenap(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}
foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

function getGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 != 0) {
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value) {
  echo "Ganjil : $value" . PHP_EOL;}