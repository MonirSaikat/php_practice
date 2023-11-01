<?php

abstract class Shape
{
  // abstact method
  abstract public function getArea();

  // concrete method
  public function getDetails()
  {
    echo 'This is shape';
  }
}

class Cirlce extends Shape
{
  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getArea()
  {
    return number_format(
      pi() * $this->radius * $this->radius,
      2
    );
  }
}

class Square extends Shape
{
  private $side;

  public function __construct($side)
  {
    $this->side = $side;
  }

  public function getArea()
  {
    return $this->side * $this->side;
  }
}

$circle = new Cirlce(10.4);

echo $circle->getArea() . PHP_EOL;

$square = new Square(10);
$square->getDetails(); // concrete method from the abstact class
