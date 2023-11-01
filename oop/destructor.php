<?php

/**
 * The __destruct magic method is called when the object is destructed, or  
 * the script is exited or stopped.
 */
class MyClass
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function __destruct()
  {
    echo 'The class called \'' . get_class($this) . '\' is destroyed';
  }
}

$newInst = new MyClass('Saikat');

echo $newInst->name;

unset($newInst);
