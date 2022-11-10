<?php

require_once 'LoggerInterface.php';

class DatabaseLogger implements LoggerInterface
{
  public function log(string $message): void
  {
    file_put_contents(filename:'database.log',data:$message.PHP_EOL , flags:FILE_APPEND);
  }
}