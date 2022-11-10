<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
</head>
<body>
<form method="post" action="traitement-formulaire.php"  enctype="multipart/form-data">
    <div>
        <input type="radio" id="Mr" name="civilite" value="Mr">
        <label for="Mr" class="inline-label">Monsieur</label>
    </div>
    <div>
        <input type="radio" id="Mme" name="civilite" value="Mme">
        <label for="Mme" class="inline-label">Madame</label>
    </div>
    <label for="name">Votre nom</label>
    <input type="text" name="name" id="name" placeholder="Saisissez votre nom">
    <label for="picture">Votre photo</label>
    <input type="file" name="picture" id="picture">
    <label for="cardId">Votre justificatif d'identité</label>
    <input type="file" name="cardId" id="cardId">
    <label for="tos" class="inline-label">J'accepte les conditions générales d'utilisation</label>
    <input type="checkbox" name="tos" id="tos">
    <button type="reset">Réinitialiser les valeurs du formulaire</button>
    <button type="submit">Soumettre le formulaire</button>
</form>
</body>
<style>
/**
    Attention, ce CSS est là uniquement pour rendre le formulaire "agréable" à la lecture sans que vous n'ayez
    à récupérer deux fichiers distincts.
    Dans un cas d'usage "réel", ces éléments doivent être externalisés
     */
    body {
        font-family: Calibri, serif;
    }
    form {
        max-width: 50%;
    }
    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }
    label.inline-label {
        display: inline-block;
    }
    fieldset {
        border: 1px solid lightgray;
        background-color: rgba(225, 233, 255, 0.25);
    }
    legend {
        font-style: italic;
        font-size: 1.1em;
        padding: 5px;
    }
    form input, form select, form textarea {
        display: inline-block;
        margin-bottom: 10px;
        padding: 10px;
        width: 80%;
    }
    form input[type="radio"],
    form input[type="checkbox"],
    form input[type="submit"] {
        width: auto;
    }
    button[type=submit], button[type=reset] {
        padding: 10px;
        margin-top: 15px;
    }
</style>
</html>
<!-- formulaire-traitement.php  -->
<?php
function printPostFormValue($key)
{
    if (!isset($_POST[$key])) {
        echo sprintf("La clé %s n/'a pas été definie <br/>", $key);
        return;
    }
    echo sprintf("La valeur de la clé %s est : " . PHP_EOL, $key);
    print_r($_POST[$key]);
    echo '<br/>';
}
function manageFile($key)
{
    $extensions = array('jpg', 'png', 'gif', 'pdf');
    if (isset($_FILES[$key]) && !$_FILES[$key]['error']) {
        $fileInfo = pathinfo($_FILES[$key]['name']);
        if ($_FILES[$key]['size'] <= 2000000) {
            if (in_array($fileInfo['extension'], $extensions)) {
                if (!is_dir($key)) {
                    try {
                        mkdir($key);
                        echo 'Le répertoire a été créé ';
                    } catch (Exception $e) {
                        echo 'Une erreur est survenue : ' . $e->getMessage();
                    }
                }
                try {
                    move_uploaded_file($_FILES[$key]['tmp_name'], $key . '/' . $_FILES[$key]['name']);
                    echo 'Le fichier a été envoyé sur le serveur';
                } catch (Exception $e) {
                    echo 'Une erreur est survenue : ' . $e->getMessage();
                }
            } else {
                echo 'Ce type de fichier est interdit';
            }
        } else {
            echo 'Le fichier dépasse la taille autorisée';
        }
    } else {
        echo 'Une erreur est survenue lors de l\'envoi du fichier';
    }
}
printPostFormValue('civilite');
printPostFormValue('name');
printPostFormValue('tos');
manageFile('picture');
manageFile('cardId');