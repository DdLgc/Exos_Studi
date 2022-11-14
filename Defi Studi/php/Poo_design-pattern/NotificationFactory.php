<?php

class NotificationFactory
{
    // La mise en place du modèle Factory permettra de futures évolutions
    /**
     * @param string $contactType
     * @return EmailNotification|SMSNotification*/
     
    public static function createNotification(string $contactType)
    {
        switch ($contactType) {
            case 'sms':
                $smsNotification = new SMSNotification();
                // On attache un type d'événement à notre notification après l'avoir instanciée
                $smsNotification->attach(new SMSIsReceived());
                return $smsNotification;
                break;
            case 'email':
            default:
                return new EmailNotification();
        }
    }
}