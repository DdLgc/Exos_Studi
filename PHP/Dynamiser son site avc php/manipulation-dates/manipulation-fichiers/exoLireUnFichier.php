<?php

// function getUsersFromFile(string $file) : ?array {
//   $users = [];
//   if(!is_file($file)) {
//     return null;
//   }
//   $ressource = fopen($file, 'r');
//   if (!$ressource) {
//     return null;  
//     }

//   while(($user = fgets($ressource)) !== false) {
//     $users[] = trim($user);
//   }
//   fclose($ressource);
//   return $users;
// }

// // trim(string $string, string $characters = " \n\r\t\v\x00"): string

// var_dump(getUsersFromFile('fichier.txt'));

// Ecrire dans le fichier 

$ressource = fopen('fichier.txt', 'w');
fwrite($ressource, 'Superman');
fwrite($ressource, 'Batman');
$ressource= file_put_contents('fichier.txt', 'Bioman', FILE_APPEND);

// fclose($ressource);

var_dump(file_get_contents('fichier.txt'));

function writeUsersInFile(string $file, array $users): bool {
  $resource = fopen($file, 'w');
  if (!$resource) {
      return false;
  }
  foreach ($users as $user) {
      fwrite($resource, implode(' ', $user).PHP_EOL);
  }
  fclose($resource);
  return true;
}
$users = [
  ['Mathilde', 'Dubois'],
  ['Eric', 'Blanchard'],
  ['Manon', 'Dupont'],
];
writeUsersInFile('ecrire-fichier.txt', $users);