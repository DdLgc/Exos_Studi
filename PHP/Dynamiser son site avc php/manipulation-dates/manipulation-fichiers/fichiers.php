<?php
// $users = ['bill', 'bob', 'joe'];
// $users = ['mathilde', 'nicolas', 'frank'];
// foreach ($users as $user) {
//     if (!is_dir($user)) {
//         mkdir(strtolower($user));
//     }
// }
// $directories = scandir('.');
// foreach ($directories as $directory) {
//     if ($directory !== '.' && $directory !== '..' && is_dir($directory) && !in_array($directory, $users)) {
//         rmdir($directory);
//     }
// }




// $ressource = openFile('fichier-existant');

// function openFile(string $file) {
//   if (!is_file($file)) {
//       return false;
//   }
//   return fopen($file, 'r');
// }
// var_dump($ressource);
// $isClosed = closeFile($ressource);
// function closeFile($resource) {
//   if (!is_resource($resource)) {
//       return false;
//   }
//   return fclose($resource);
// }
// var_dump($ressource);
// $ressource = openFile('fichier-inexistant');

// function openFile(string $file) {
//   if (!is_file($file)) {
//       return false;
//   }
//   return fopen($file, 'r');
// }
// var_dump($ressource);
// $isClosed = closeFile($ressource);
// function closeFile($resource) {
//   if (!is_resource($resource)) {
//       return false;
//   }
//   return fclose($resource);
// }
// var_dump($ressource);


// Creer une ressource 
$resource =fopen('fichier.txt', 'r');

// Lire la ressoource 
if ($resource) {
  while (($buffer = fgets($resource)) !== false) {
    echo $buffer;
}
// fermer la resource 
  fclose($resource);
}

$section = file_get_contents('fichier.txt');
var_dump($section);