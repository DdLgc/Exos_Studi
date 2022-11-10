<?php


require_once 'DatabaseManagerInterface.php';

class MySQLDatabaseManager implements DatabaseManagerInterface
{
  public function isDatabaseConnected(): boolval
  {
    return false;
  }
}