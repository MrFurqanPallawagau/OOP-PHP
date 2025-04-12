<?php

$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

var_dump($result); // true
var_dump($matches); // array(3) { [0]=> array(3) { [0]=> string(3) "Eko" [1]=> string(4) "awan" [2]=> string(3) "edy" } }

$result = preg_replace("/anjing|kucing/i", "****", "anjing kucing anjing kucing");

var_dump($result);

$result = preg_split("/[\s,]+/", "Eko Kurniawan Khannedy, Zaman-Now");

var_dump($result);