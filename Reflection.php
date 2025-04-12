<?php

require_once __DIR__ . "/exception/ValidationException.php";
require_once __DIR__ ."/data/LoginRequest.php";
require_once __DIR__ ."/helper/Validation.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

//ValidationUntil::validate($request);

ValidationUntil::validateReflection($request);

class RegisterUserRequest
{
  public string $name;
  public string $address;
  public string $email;
}

$register = new RegisterUserRequest();
$register->name = "Eko";
$register->address = "Subang";
$register->email = "eko@gmail.com";

ValidationUntil::validateReflection($register);



