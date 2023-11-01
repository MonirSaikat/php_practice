<?php

/**
 * Properties and methods can have access modifiers which controls,
 * where they can be accessed.
 * 
 * There are three types of access modifiers:
 * 1: public: Can be accessed from anywhere
 * 2: private: Can be accessed only from the class itself
 * 3: protected: Can be accessed only from the class itself and from it's child classes
 */
class AccessModifers
{
  private $private_prop;
  public $public_prop;
  protected $protected_prop;

  /**
   * You can use this magic method to handle non-accessible properties
   */
  public function __set($name, $value)
  {
    echo "You do not have access to " . $name . "\n";
  }
}


$myClass = new AccessModifers();
$myClass->public_prop = 'This is okay';
$myClass->protected_prop = 'This is not okay';
$myClass->protected_prop = 'This is not okay too';
