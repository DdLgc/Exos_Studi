<?php

require_once 'EUFormatter.php';
require_once 'Book.php';

$formatter = new EUFormatter();
$book = new Book('mon livre', 10 , $formatter, 'John Smith', 255);

echo $book->getFormattedPrice();