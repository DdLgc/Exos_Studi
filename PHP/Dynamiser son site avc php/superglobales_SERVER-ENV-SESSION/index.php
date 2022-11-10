Affichez les variables serveur suivantes :

-La méthode de requête utilisée pour accéder à la page courante
-L'adresse IP de l'utilisateur qui demande la page courante
-Le chemin absolu vers le fichier correspondant à la page courante

<?php
echo $_SERVER['REQUEST_METHOD'] . PHP_EOL;
echo $_SERVER['REMOTE_ADDR'] . PHP_EOL;
echo $_SERVER['SCRIPT_FILENAME'] . PHP_EOL;
?>

Définissez une variable d'environnement que vous appellerez contexte et dont la valeur sera developpement. Affichez cette variable, une fois définie.

<?php
putenv('contexte=developpement');
echo getenv('contexte');
?>

Déclarez un cookie permettant de stocker la date de dernière mise à jour du panier pour un site marchand. Ce cookie aura une validité de 3 h.
Dans un second temps, une fois ce cookie déclaré, affichez son contenu et supprimez-le.

<?php
// 1ère étape : déclaration
setcookie('cartUpdate', date('d/m/y h:i:s'), time() + 10800);
?>
<?php
// Seconde étape, car les cookies ne sont accessibles qu'après un rechargement de la page
// Affichage
print_r($_COOKIE['cartUpdate']);
// Suppression
setcookie('cartUpdate', '', time() - 3600);
?>

Créez un script index.php dans lequel vous initialiserez trois variables de session auxquelles vous attribuerez une valeur : $name, $age, $favoriteLangages.
Dans un second script display-session.php, vous afficherez le message "Bonjour, je m'appelle ... et j'ai ... Mes langages de programmation préférés sont ...", que vous aurez récupéré grâce aux variables de session.
Vous prendrez soin de supprimer la session à la fin de ce second script.
Attention, vérifiez que ces variables ont bien été définies avant de les afficher.

<?php
// index.php
// require_once(“display-session.php”); erreur de la plateforme pour changer 
session_start();
$_SESSION['name'] = 'Laurent';
$_SESSION['age'] = 27;
$_SESSION['favoriteLangages'] = ['PHP', 'HTML', 'CSS'];
echo 'Session initialisée';
?>

<?php
//display-session.php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['favoriteLangages']))
{
  echo sprintf("Je m'appelle %s et j'ai %s ans", $_SESSION['name'], $_SESSION['age']) . PHP_EOL;
  echo sprintf("Mes langages de programmation favoris sont les suivants") . PHP_EOL;
  foreach ($_SESSION['favoriteLangages'] as $langage)
  {
    echo $langage . PHP_EOL;
  }
} else {
  echo "Toutes les variables n'ont pas été définies" . PHP_EOL;
}
session_destroy();




