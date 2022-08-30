<?php
$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];
?>
    <h1>Foire aux questions</h1>
<?php foreach ($posts as $id => $post) : ?>
    <h2>&laquo; <?= $post['title'] ?> &raquo; publié le <?= $post['createdAt']->format('d/m/Y') ?></h2>
    <p><a href="supprimer.php?id=<?= $id ?>&admin=1">Supprimer</a></p>
<?php endforeach;
?>

Fichier supprimer.php :

<?php
if ($_GET['admin'] !== '1') {
    die('Vous n\'avez pas le droit de supprimer des articles !');
}
$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];
unset($posts[$_GET['id']]);
header('Location: index.php');