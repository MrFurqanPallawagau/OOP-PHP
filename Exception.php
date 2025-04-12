<?php

require_once __DIR__ . "/exception/ValidationException.php";
require_once __DIR__ ."/data/LoginRequest.php";
require_once __DIR__ ."/helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "shura";
$loginRequest->password = "123456";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password =("");

try{
  validateLoginRequest($loginRequest);
  echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
  echo "validation Error : " . $exception->getMessage() . PHP_EOL;

  var_dump($exception->getTrace());

  echo $exception->getTraceAsString().PHP_EOL;
} finally {
  echo "ERROR ATAU TIDAK,AKAN DIEKSEKUSI" . PHP_EOL;
}


validateLoginRequest($loginRequest);

echo "VALID" . PHP_EOL;