<!-- Reprenons le code de notre book en ligne. L'objectif est de présenter les différentes séries photographiques réalisées. Une photographie appartient à une seule série.

Pour réaliser cet exercice, vous pouvez travailler sur l'environnement de travail : -->

<?php
require_once('controllers/controller.php');
require_once('models/Model.php');
require_once('models/Photo.php');
require_once('models/Photos.php');
require_once('models/Serie.php');
require_once('models/Series.php');
$controller = new Controller();
if (isset($_GET['page']) && 'photo' === $_GET['page']) {
    $controller->afficherPhoto();
} elseif (isset($_GET['page']) && 'series' === $_GET['page']) {
    $controller->listerSeries();
} else {
    $controller->listerPhotos();
}