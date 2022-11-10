

<?php
function listFilesAndDirectories(string $path): void {
    $path = realpath('fichier.txt').DIRECTORY_SEPARATOR;
    $elements = scandir($path);
    foreach ($elements as $element) {
        echo $element;
        echo ' a été créé le '.date('d/m/Y à H:i:s', filectime($path.$element));
        echo ' et modifié le '.date('d/m/Y à H:i:s', filemtime($path.$element));
        echo PHP_EOL;
    }
}
// La ligne 2, “$path = realpath($path).DIRECTORY_SEPARATOR;” permet de retourner le chemin absolu d’un fichier ou d’un dossier. DIRECTORY_SEPARATOR est une constante pré-définie qui permet de changer les “/” en fonction du système d’exploitation. “/” sur Linux et “\” sur Windows.