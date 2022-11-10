Vous devez limiter cet affichage aux personnes autorisées uniquement.
Pour cela, modifiez ce script pour n'afficher le contenu de la page qu'aux administrateurs.
On considérera qu'une personne est administratrice lorsqu'elle accède à la page grâce à l'URL administration.php?admin=1
Si la personne n'est pas autorisée à accéder à la page, affichez un message d'erreur
Cette page affiche également un message de bienvenue à l'utilisateur en affichant son nom, récupéré grâce à un paramètre name dans l'URL
Faites en sorte de sécuriser l'affichage si cette valeur n'est pas présente

Exemples :

http://localhost/administration.php?admin=0 : Vous n'êtes pas autorisé à accéder à la page

http://localhost/administration.php?admin=1 : Vous êtes autorisé à accéder à la page, mais vous ne voyez pas le message de bienvenue

http://localhost/administration.php?admin=1&name=laurent : Vous êtes autorisé à accéder à la page et vous voyez le message de bienvenue

Vous remarquerez avec quelle facilité il est possible d'afficher ou de masquer la section d'administration dans cet exemple. C'est pour cela que vous ne devez pas vous fier à ce qui vous est renvoyé dans une URL pour des informations sensibles.


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <h1>Administration de votre site</h1>
    <p class="greetings">
        <?php
        if(isset($_GET['admin']) && 1 === (int)$_GET['admin']) {
          echo sprintf("Bienvenue sur l'administration de votre site %s", $_GET['name']);
        }
          ?>
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur
    </p>
    <table>
        <thead>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Lorem</td>
            <td>Ipsum</td>
            <td><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td><a href="#">Supprimer</a></td>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td><a href="#">Supprimer</a></td>
        </tr>
        </tbody>
    </table>
</section>
</body>
<style>
    body {
        font-family: Calibri, serif;
    }
    h1, h2 {
        text-align: center;
    }
    table {
        border-collapse: collapse;
        width: 50%;
        margin: auto;
    }
    table, th, td {
        border: 1px solid black;
    }
    thead {
        background-color: beige;
        font-weight: bold;
        text-align: center;
    }
    p {
        width: 50%;
        margin: auto auto 10px;
    }
    p.greetings {
        background-color: ivory;
        font-weight: bold;
        font-size: 16px;
        padding: 5px;
        border: 1px solid gray;
    }
</style>
</html>