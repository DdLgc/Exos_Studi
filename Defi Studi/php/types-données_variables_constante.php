<!-- Sachant qu'aujourd'hui un euro vaut :
1,08 dollar américain
120,34 yens
0.00016 bitcoins
Codez un script qui va afficher la valeur d'une variable donnée en euros dans ces trois monnaies.
La solution doit apparaître sous cette forme (ici un exemple avec 3,12 €) :
« 3.12 euros = 3.3696 dollars, 375.4608 yens et 0.0004992 bitcoins. » -->
<?php
    define('DOLLAR_RATE', 1.08);
    define('YEN_RATE', 120.34);
    define('BITCOIN_RATE', 0.00016);
    $eurosPrice = 3.12;
    $dollarPrice = $eurosPrice * DOLLAR_RATE;
    $yenPrice = $eurosPrice * YEN_RATE;
    $bitcoinPrice = $eurosPrice * BITCOIN_RATE;
    echo $eurosPrice.' euros = '.$dollarPrice.' dollars, '.$yenPrice.' yens et '.$bitcoinPrice.' bitcoins.';