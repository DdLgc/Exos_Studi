La classe Logger devra donc créer le fichier s'il n'existe pas et proposer une méthode log() permettant d'écrire une ligne dans ce fichier : le message sera passé en paramètre, mais la date devra être ajoutée à la volée.

Attention : pour des raisons de performance, il est préférable d'ouvrir le fichier au début et de le refermer à la fin du script, plutôt que de l'ouvrir et le refermer à chaque insertion.

Lorsque le Logger est créé, il doit créer automatiquement un message "Ouverture des logs", et un message "Fermeture des logs" doit être créé à la fin du script : cela permet de séparer les appels d'une même journée.

Une fois votre Logger créé, instanciez-le et créez un message de log de test. Assurez-vous qu'il soit bien placé entre les deux messages d'ouverture et de fermeture.

Note : le type "resource", qui est utilisé pour manipuler des fichiers ou des connexions, n'est pas un "vrai" type et ne peut pas être utilisé pour typer des variables. Exceptionnellement, vous aurez le droit de ne pas typer votre propriété.

<?php
class Logger
{
  public $file;
  public function __construct()
  {
    $this->file = fopen(date('Y-m-d').'.log', 'a');
    $this->log('Ouverture des logs');
  }
  public function log(string $message)
  {
    fwrite($this->file, '['.date('Y-m-d H:i:s').'] '.$message.PHP_EOL);
  }
  public function __destruct()
  {
    $this->log('Fermeture des logs');
    fclose($this->file);
  }
}
$logger = new Logger();
$logger->log('test');