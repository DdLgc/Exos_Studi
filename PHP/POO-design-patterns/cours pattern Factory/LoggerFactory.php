<?php

require_once 'DatabaseLogger.php';
require_once 'DatabaseManager.php';
require_once 'Logger.php';

class LoggerFactory
{
  public DatabaseManagerInterface  $databaseManager;
  private DatabaseLogger $databaseLogger;
  private Logger $logger;

  public function __coonstruct(DatabaseManagerInterface $databaseManager)
  {
    $this->databaseManager = $databaseManager;
    $this->databaseLogger = new databaseLogger();
    $this->logger = new Logger();
  }


  public function createLogger(): Loggerinterface
  {
    if ($this->$databaseManager->isDatabaseConnected()) {
      return $this->DatabaseLogger;
    } else {
      return $this->Logger;
    }
  }
}
