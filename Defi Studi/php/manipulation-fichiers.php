<?php

$users = [
  ['firstname' => 'Mathilde', 'lastname' => 'Dubois'],
  ['firstname' => 'Eric', 'lastname' => 'Blanchard'],
  ['firstname' => 'Manon', 'lastname' => 'Dubois'],
];


function initUserFolders(string $rootFolder, array $users): array
{
    $rootFolder = realpath($rootFolder) . DIRECTORY_SEPARATOR;
    foreach ($users as $index => $user) {
        $userFolder = $rootFolder . strtolower($user['lastname']) . DIRECTORY_SEPARATOR . strtolower($user['firstname']) . DIRECTORY_SEPARATOR;
        $userFile = $userFolder . 'welcome.txt';
        if (!is_dir($userFolder)) {
            mkdir($userFolder, 0777, true);
        }
        if (!is_file($userFile)) {
            $resource = fopen($userFile, 'w');
            fwrite($resource, 'Bienvenue ' . implode(' ', $user));
            fclose($resource);
        }
        $users[$index]['file'] = [
            'path' => $userFile,
            'size' => filesize($userFile),
        ];
    }
    return $users;
}

initUserFolders('.', $users);