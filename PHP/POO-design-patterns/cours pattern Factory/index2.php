<?php

require_once 'LoggerFactory.php';
require_once 'DatabaseManager.php';

$databaseManager = new DatabaseManager();
$loggerFactory = new LoggerFactory($databaseManager);
$logger = $loggerFactory->createLogger();

$logger->log('je suis sur index 2');