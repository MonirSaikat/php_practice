<?php

/**
 * Static methods can be called directly on the class itself, without creating an object(instance)
 * of the class. 
 * 
 * Static methods are often used for utility functions, factory methods, or methods that don't 
 * rely on instance-specific data. 
 */

class Database
{
  private static $instance;
  private $connection;

  public function __construct()
  {
    $this->connection = new PDO('mysql:host=localhost;dbname=my_test_db', 'root', '');
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getConnection()
  {
    return $this->connection;
  }
}

$db = Database::getInstance();
$connection = $db->getConnection();
