<?php


/**
 * The __construct or constructor is is called when you a new object of the 
 * class is instantiated. You can use this to setup all the needed properties of the class.
 */
class ClassForConstruct
{
  public $name;

  public function __construct()
  {
    echo 'The class called: \'' . get_class($this) . '\' is instantiated';
  }
}

$myNewClass = new ClassForConstruct();
