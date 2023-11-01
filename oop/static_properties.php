<?php

/**
 * Static properties are properties associated with a class rather than an instance of the class.
 * They are shared among all instances of a class and can be accessed or modified by directly
 * through the class itself.
 */

class MyClass
{
  private static $instanceCount = 0;

  public function __construct()
  {
    self::$instanceCount++;
  }

  public static function getInstanceCount()
  {
    return 'There are ' . self::$instanceCount . ' instances found of the class: ' . get_class();
  }
}

$class1 = new MyClass();
$class2 = new MyClass();

echo MyClass::getInstanceCount() . PHP_EOL;
