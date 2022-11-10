<?php

function updatePassword(string $password): void
{
  if (strlen($password) < 10) {
    throw new Exception ('Attention mdp trop court!!!!');
  }

  if (ctype_alnum($password)) {
    throw new Exception ('Attention ilmanque un caractere alpnum!!!!');
  }

  //mise a jour du mot de passe
}

updatePassword('coucou');



?> EXOS_STUDI

Modifiez le code suivant afin de déclencher des exceptions plutôt que d'afficher de simples messages d'erreur.

<?php
// On vérifie qu'on a bien deux variables de définies
if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    // On vérifie qu'il s'agit de numériques
    if (is_numeric($_GET['nombre1']) && is_numeric($_GET['nombre2'])) {
        // On vérifie qu'on n'essaie pas de faire une division par zéro
        if ((int)$_GET['nombre2'] !== 0) {
            $division = $_GET['nombre1'] / $_GET['nombre2'];
            echo $division;
        } else {
          throw new Exception ('Vous ne pouvez pas diviser un nombre par zéro');
        }
    } else {
      throw new Exception ('Vous devez fournir des chiffres');
    }
} else {
  throw new Exception ('Vous devez définir deux nombres');
}
?>

Le code suivant doit permettre de supprimer un objet de type User.
On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur, auquel cas une exception est levée.
Question
Mettez en place la syntaxe permettant d'attraper l'exception levée lorsque la fonction removeUser est appelée.

Que l'utilisateur ait pu ou non être supprimé, vous afficherez le message "Utilisateur traité".
<?php
function removeUserr(User $user)
{
    if ($user->isAdmin()) {
        throw new Exception('Vous ne pouvez pas supprimer un administrateur');
    }
    // code métier qui supprime un utilisateur
    return true;
}
$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);
$usersToRemove = [$user1, $user2];
foreach ($usersToRemove as $user) {
  try {
    removeUserr($user);
  } catch (Exception $exception)
  {
    echo $exception->getMessage() . PHP_EOL;
  } finally {
    echo 'Utilisateur traité' . PHP_EOL;
  }
}
class User
{
    public $name;
    public $roles = [];
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';
    public function __construct(string $name, array $roles)
    {
        $this->name = $name;
        $this->roles = $roles;
    }
    public function isAdmin()
    {
        return in_array(self::ROLE_ADMIN, $this->roles);
    }
}
?>

Le code suivant doit permettre de supprimer un objet de type User.
On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur, auquel cas une exception est levée.

Question
Lorsqu'une exception est levée, on souhaite afficher :

Le message de l'exception, Le code erreur, Le fichier et la ligne concernée, La stack trace (ou trace d'appels)

Sous la forme :

"[Code] - Message : Fichier ligne"
Stack trace

<?php
function removeUserrr(User $user)
{
    if ($user->isAdmin()) {
        throw new Exception('Vous ne pouvez pas supprimer un administrateur');
    }
    // code métier qui supprime un utilisateur
    return true;
}
$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);
$usersToRemove = [$user1, $user2];
foreach ($usersToRemove as $user) {
    try {
        removeUserrr($user);
    } catch (Exception $exception) {
        echo sprintf("[%s] - %s: %s ligne %s", $exception->getCode(), $exception->getMessage(), $exception->getFile(), $exception->getLine());
        echo '<pre>';
        foreach ($exception->getTrace() as $item) {
            var_dump($item);
        }
    } finally {
        echo 'Utilisateur traité' . PHP_EOL;
    }
}
class User
{
    public $name;
    public $roles = [];
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';
    public function __construct(string $name, array $roles)
    {
        $this->name = $name;
        $this->roles = $roles;
    }
    public function isAdmin()
    {
        return in_array(self::ROLE_ADMIN, $this->roles);
    }
}

?>

Le code suivant doit permettre de supprimer un objet de type User.
On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur, auquel cas une exception est levée.
Actuellement, lorsqu'une exception est levée, celle-ci est formatée de façon spécifique.

Question
Afin de pouvoir réutiliser le formatage qui a été mis en place, implémentez une nouvelle exception de type UserAdminException.
Une méthode displayDetails permettra d'afficher les détails de l'exception de façon formatée.

<?php
function removeUser(User $user)
{
    if ($user->isAdmin()) {
        throw new UserAdminException('Vous ne pouvez pas supprimer un administrateur');
    }
    // code métier qui supprime un utilisateur
    return true;
}
$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);
$usersToRemove = [$user1, $user2];
foreach ($usersToRemove as $user) {
    try {
        removeUser($user);
    } catch (UserAdminException $exception) {
        echo $exception->displayDetails();
    } finally {
        echo 'Utilisateur traité' . PHP_EOL;
    }
}
class UserAdminException extends Exception {
    public function __construct($message, $code=0)
    {
        parent::__construct($message, $code);
    }
    public function displayDetails()
    {
        echo sprintf("[%s] - %s: %s ligne %s", $this->getCode(), $this->getMessage(), $this->getFile(), $this->getLine());
    }
}
class User
{
    public $name;
    public $roles = [];
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';
    public function __construct(string $name, array $roles)
    {
        $this->name = $name;
        $this->roles = $roles;
    }
    public function isAdmin()
    {
        return in_array(self::ROLE_ADMIN, $this->roles);
    }
}
