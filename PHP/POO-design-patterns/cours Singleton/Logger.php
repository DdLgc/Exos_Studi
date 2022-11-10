<?php

require_once 'Loggerinterface.php'; 

class Logger implements Loggerinterface
{
  private static Logger $instance;

  private function __construct()
  {
  }
  
  private function __clone()
  {
  }
  
  public static function getinstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new Logger();
      }
  return self::$instance;
  }

  public function log(string $message): void
  {
    file_put_contents(filename:date(format:'Y-m-d').'.log',data:$message.PHP_EOL , flags:FILE_APPEND);
  }
}