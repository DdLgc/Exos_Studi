<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <?php
    $mainTitle = 'administration de votre site';
    $pageTitle = 'liste des utilisateurs';
    $users = ['JOHN', 'LILI', 'CLEMENCE']
    ?>
    <h1><?= $mainTitle ?></h1>
    <h2><?= $pageTitle ?></h2>
    <table>
        <thead>
        <tr>
            <td>Nom</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
            // On parcourt ici notre tableau d'utilisateurs pour les afficher un par un
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?= $user ?></td>
                    <td><a href="#">Supprimer</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <p>Votre site dispose de 3 utilisateurs</p>
</section>
</body>
</html>

Le titre principal devra être écrit entièrement en majuscules,
Le titre de la page devra être écrit avec sa première lettre en majuscule,
Les noms de chaque utilisateur seront écrits en minuscules,
À l'aide d'une fonction permettant de compter le nombre d'éléments dans un tableau, vous afficherez le nombre d'utilisateurs. L'ajout d'un nouvel élément dans le tableau permettra de vérifier que ce nombre est généré dynamiquement.

<html lang="fr">
<head>
    <meta charset="utf-8"/>
</head>
<body>
<section>
    <?php
    $mainTitle = 'administration de votre site';
    $pageTitle = 'liste des utilisateurs';
    $users = ['JOHN', 'LILI', 'CLEMENCE']
    ?>
    <h1><?= strtoupper($mainTitle)  ?></h1>
    <h2><?= ucfirst($pageTitle)  ?></h2>
    <table>
        <thead>
        <tr>
            <td>Nom</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
            // On parcourt ici notre tableau d'utilisateurs pour les afficher un par un
            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?= strtolower($user) ?></td>
                    <td><a href="#">Supprimer</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
    <p>Votre site dispose de <?= count($users) ?> utilisateurs</p>
</section>
</body>
</html>