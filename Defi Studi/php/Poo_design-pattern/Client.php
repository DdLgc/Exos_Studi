<!-- Pour les besoins d'un site de vente en ligne, vous êtes chargé de mettre en place un système permettant d'informer un client que sa commande a été expédiée.

Le code ci-dessous implémente la classe Client et vous fournit une liste de clients que vous devrez contacter.

Un client est toujours contacté selon son moyen de contact favori, représenté par la propriété $contactWith.

Selon celui-ci, la méthode getContactInformation() permet de retourner son numéro de téléphone ou son adresse e-mail. -->



<?php

/**
 * Class Client
 */
class Client
{
    public $name;
    public $contactWith;
    public $email;
    public $phoneNumber;
    public function __construct(string $name, string $contactBy, string $email, string $phoneNumber)
    {
        $this->name = $name;
        $this->contactWith = $contactBy;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }
    public function getContactInformation()
    {
        switch ($this->contactWith) {
            case 'sms':
                return $this->phoneNumber;
                break;
            case 'email':
            default:
                return $this->email;
                break;
        }
    }
}
$message = "Commande expédiée";
$clientsToNotifyToNotify = [];
$clientsToNotify[] = new Client("Karine", "email", "karine@mail.fr", "01.02.03.04.05.06");
$clientsToNotify[] = new Client("Julien", "sms", "julien@mail.fr", "01.02.03.04.05.07");
$clientsToNotify[] = new Client("Karim", "sms", "karim@mail.fr", "01.02.03.04.05.08");
$clientsToNotify[] = new Client("Justine", "email", "justine@mail.fr", "01.02.03.04.05.09");
foreach ($clientsToNotify as $client)
{

   // Pour chacun des clients, on doit notifier celui-ci selon son moyen de contact favori que sa commande a été expédiée.
  $notification = NotificationFactory::createNotification($client->contactWith);
  $notification->manageNotification($client->getContactInformation(), $message);
}


// Reprenez le code présent dans la solution ci-dessus.

// Lorsqu'une notification de type SMS est envoyée, nous souhaitons être informés du fait que celui-ci a bien été remis à son destinataire.

// Implémentez la structure nécessaire à la mise en œuvre de ce système. Une méthode setReceived(bool $isReceived) permettra de déclencher un changement d'état de cet objet.

// Par simplification, on appellera la méthode sous cette forme $this->setReceived((bool) rand(0, 1)); au sein de la méthode send de l'objet représentant la notification SMS.