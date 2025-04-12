<?php

$dateTime = new DateTime();
$dateTime->setDate(2003,
1,17);
$dateTime->setTime(19,30,0);

$dateTime->add(new DateInterval("P1Y"));

$minusonemonth = new DateInterval("P1M");
$minusonemonth->invert = true;
$dateTime->add($minusonemonth);

var_dump(($dateTime));

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("asia/tokyo"));
var_dump($now);

$string =$now->format("Y-m-d H:i:s");
echo "Waktu sekarang adalah $string". PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s","2020-10-10 10:10:10", new DateTimeZone("asia/jakarta"));
if ($date){
var_dump($date);
}else{
  echo "Format Salah". PHP_EOL;
}