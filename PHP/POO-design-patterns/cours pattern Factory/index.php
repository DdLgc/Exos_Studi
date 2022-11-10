<?php

require_once 'User.php';
require_once 'LoggerFactory.php';
require_once 'DatabaseManagerFactory.php';

$databaseManagerFactory = new DatabaseManagerFactory();
$databaseManager = $databaseManagerFactory->createDatabaseManager( type:'mysql');
$loggerFactory = new LoggerFactory($databaseManager);
$logger = $loggerFactory->createLogger();

$john = new User(username:'John', $logger);
$laure = new User(username:'laure', $logger);
echo $john->sayHello();
echo'<br>';
echo $laure->sayHello();
$samantha = new User(username:'sam',$logger);

