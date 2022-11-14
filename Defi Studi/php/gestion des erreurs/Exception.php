<?php

require_once 'User.php';

try {
	processForm();
} catch (InvalidUserException $exception) {
					echo $exception->getMessage() . "<br/>";
					}
function processForm()
{
    $user = new User();
    $formFields = ['name', 'birthDate', 'email', 'password', 'comment'];
    foreach ($formFields as $field) {
        try {
            $user->{'set' . ucfirst($field)}($_POST[$field]);
        } catch (Exception $exception) {
            echo $exception->getMessage() . "<br/>";
        }
    }
    if (!$user->isFull()) {
        throw new InvalidUserException('Une erreur est survenue : l\'utilisateur est incomplet');
    }
    echo 'Utilisateur complet';
}