<!-- Continuez à segmenter votre code en ajoutant la possibilité de voir le détail d'un article. Pour cela, vous aurez besoin de :

un contrôleur frontal index.php

un contrôleur controllers/Controller.php pour voir un article et lister des articles

un trait générique models/Model.php contenant l'accès à la base de données

deux modèles models/Posts.php et models/Post.php pour récupérer respectivement une liste d'articles et un unique article
deux templates views/posts-list.php et views/post-show.php pour afficher respectivement une liste d'articles et un unique article
un template global views/layout.php contenant l'ossature de vos pages HTML -->


<?php
require_once('controllers/Controller.php');
require_once('models/Model.php');
require_once('models/Post.php');
require_once('models/Posts.php');
$controleur = new Controller();
if (isset($_GET['id'])) {
    $controleur->getPost();
} else {
    $controleur->getPosts();
}


// À retenir
// La couche contrôleur réceptionne la demande de l'utilisateur, demande les données au modèle, sollicite la vue en passant ces données, puis répond à l'internaute.

// Une bonne pratique consiste à avoir une couche contrôleur la plus fine possible (peu de code) afin de maximiser la réutilisabilité du modèle et de la vue.