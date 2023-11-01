<?php


/**
 * A trait is mechanism that allows you to reuse methods in multiple classes without using 
 * traditional single inheritance. A class can one or more traits using the `use` statement. 
 * Note: traits can have abstract as well as concrete methods
 * Note: methods inside a trait can have access modifiers(public, private, protected)
 */

trait Validatable
{
  public function validateFields($data, $requiredFields)
  {
    foreach ($requiredFields as $field) {
      if (!isset($data[$field])) return false;
    }

    return true;
  }
}

class RegistrationController
{
  use Validatable;

  public function registerUser($data)
  {
    $requiredFields = ['name', 'email', 'password'];

    if ($this->validateFields($data, $requiredFields)) {
      echo 'You can register';
    } else {
      echo 'Validation failed!!!';
    }
  }
}


// lets do an extra things here like facades
class Register
{
  public static function __callStatic($method, $args)
  {
    $instance = new RegistrationController();

    if (method_exists($instance, $method)) {
      $instance->$method(...$args);
    } else {
      echo 'Error: The method ' . $method . ' does exist in the class called: ' . get_class($instance);
    }
  }
}

Register::registerUser([
  'name' => 'Moniruzzaman Saikat',
  'email' => 'monirsaikat1@gmail.com',

  // if you un-comment this, you can register 😀 
  // 'password' => 'password', 
]);
