<?php

/**
 * Inhertence is a mechanism in OOP to inherit some properties and behaviour from another class.
 * The class that inherits these properties is called subclass or derived class, and another class is called super class or parent class.
 */


class Fruit
{
  public $name;
  public $color;

  public function __construct($name, $color)
  {
    echo 'The ' . $name . ' of the color of ' . $color . ' is created';
  }
}

class Mango extends Fruit
{
}

class Banana extends Fruit
{
}


$banana = new Banana('Banana', 'yellow');

