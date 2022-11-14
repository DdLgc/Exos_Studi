<!-- Déclarez une fonction greetings qui permettra à un utilisateur d'afficher plusieurs informations le concernant :
Son nom : il doit s'agir d'une chaîne de caractères
Son âge : il doit s'agir d'un entier
Ses langages de programmation préférés : il doit s'agir d'un tableau qui, par défaut, peut être vide

La fonction devra afficher les éléments suivants :
"Bonjour, je m'appelle ... et j'ai ... ans."
Si l'utilisateur n'a pas défini de langages de programmation préférés, affichez "Je n'ai pas de langage de programmation favori"
Si l'utilisateur a défini des langages de programmation préférés, affichez "J'ai N langages de programmation favoris, il s'agit de : ... ... ..." -->

<?php

function greetings(string $name, int $age, array $favoriteLanguages = [])
{
  echo(sprintf("Bonjour, je m'appelle %s et j'ai %s ans.", $name,$age));
  
  if(empty ($favoriteLanguages)) {
    echo"Je n'ai pas de langues de programmation favori" .PHP_EOL;
  } else {
    echo(sprintf("J'ai %s langues favoris, il s'agit de : %s". PHP_EOL, count($favoriteLanguages),implode(',',$favoriteLanguages)));
  }
  echo sprintf('La fonction a été exécutée %s fois' . PHP_EOL, countGreetings());
}
function countGreetings()
{
    static $count = 0;
    
    return ++$count;
}

Greetings('Laure',27, ['PHP', 'Python']);
Greetings('Julie',26);


// Déclarez une seconde fonction, countGreetings, qui implémentera un compteur qui sera incrémenté à chaque appel.
// Cette fonction devra retourner la valeur de son compteur.
// La fonction greetings devra appeler la fonction countGreetings à chaque fois qu'elle est appelée,et affichera le message "La fonction a été exécutée ... fois".
// Réalisez plusieurs appels de votre fonction et affichez la valeur du compteur après avoir réalisé le dernier appel.



