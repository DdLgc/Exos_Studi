<?php

require_once 'User.php';
require_once 'DatabaseLogger.php';


$databaseLogger = new DatabaseLogger();

$john = new User(username:'John', $databaseLogger);
$laure = new User(username:'laure', $databaseLogger);
echo $john->sayHello();
echo'<br>';
echo $laure->sayHello();
$samantha = new User(username:'sam',$databaseLogger);


