<!-- Une université gère des professeurs, des étudiants et les cours qui leur sont associés.

Un professeur possède un prénom, un nom de famille et enseigne une matière : chaque professeur ne peut enseigner qu'une seule matière. Un élève possède un prénom, un nom de famille et une liste de matières qu'il souhaite suivre. Enfin, une matière est composée d'un titre et d'une description.

Le résumé de chacun de ces éléments (professeur, élève ou matière) doit pouvoir être affiché sur le site Internet de l'université. Ce résumé sera simplement composé d'un titre de niveau 3 et d'une description, contenue dans une balise p.

Le titre d'un étudiant est son nom suivi de son prénom, celui d'un professeur est similaire, mais préfixé de "Professeur" et celui d'une matière est simplement son titre.

La description d'un étudiant est la liste de titres des matières qu'il étudie, celle d'un professeur est le nom de la matière qu'il enseigne, et celle d'une matière est simplement sa description.
Voici l'exemple d'un fichier index.php final que l'on souhaite et son résultat :

 -->

<?php
require_once 'Student.php';
require_once 'Course.php';
require_once 'Teacher.php';
require_once 'functions.php';
$french = new Course('Français', 'La langue de Molière');
$computerScience = new Course('Informatique', 'Apprendre à développer des sites internet');
$john = new Student('John', 'Doe', [$french, $computerScience]);
$laure = new Teacher('Laure', 'Dupond', $computerScience);
displayDescription($french);
displayDescription($computerScience);
displayDescription($john);
displayDescription($laure);


// Créez un script permettant de gérer l'ensemble de ces éléments en minimisant la répétition de code au maximum.