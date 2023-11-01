<?php

/**
 * Interface is a blueprint for defining a set of methods that a class must implement.
 * Note: all the methods in an interface are abstract so you cannot have body in the interface.
 * Note: all the methods have to public, you cannot have private or protected methods here.
 */

interface DatabaseInterface
{
  public function connect();
  public function query();
}

class MySqlDatabase implements DatabaseInterface
{
  public function connect()
  {
    echo 'mysql database is connected';
  }
  public function query()
  {
    echo 'some query is executed using mysql';
  }
}

class SQLiteDatabase implements DatabaseInterface
{
  public function connect()
  {
    echo 'sqlite database is connected';
  }

  public function query()
  {
    echo 'some query is executed using sqlite';
  }
}
