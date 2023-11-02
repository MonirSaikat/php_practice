<?php

/**
 * The final keyword prevents child classes from overriding a method or constant by prefixing
 * the definition with final. If the class itself is being defined final then it cannot be extended. 
 */

final class MathCalculator
{
  public function add($a, $b)
  {
    return $a + $b;
  }

  public function subtract($a, $b)
  {
    return $a - $b;
  }

  final public function multiply($a, $b)
  {
    return $a * $b;
  }
}

$calculator = new MathCalculator();
$result1 = $calculator->add(5, 3);
$result2 = $calculator->subtract(10, 2);
$result3 = $calculator->multiply(4, 6);

echo $result3;
