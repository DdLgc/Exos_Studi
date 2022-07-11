// On veut réaliser un test de culture générale auquel les joueurs répondent sur papier. La première question demande la valeur de PI.
// Stocker la valeur « Question 1 : Quelle est la valeur de PI ? »dans une constante QUESTION_1, puis l'afficher.

const question1 = 'Question : quelle est la valeur de Pi?'
console.log(question1)

// Il faut ensuite donner la réponse. Afficher la bonne réponse en utilisant une constante PI avec un message « Réponse à la question 1 : 3.14 ».
const solution1 = 3.14
console.log('Réponse à la question :', solution1)

// On souhaite demander le mot de passe d'un utilisateur lorsqu'il crée son compte.
// Récupérer la réponse de l'utilisateur dans une variable password, en lui ayant demandé « Veuillez entrer votre mot de passe : ».
// Afficher enfin « Le mot de passe "xxx" est-il correct ? »en remplaçant par le mot de passe donné.

const password = prompt('Veuillez entrer votre mot de passe')
if (password !== '') {
  console.log('Le mot de passe "' + password + '" est-il correct?')
}

// On veut vérifier qu'un client a le droit d’accéder à une attraction à sensations fortes.
// Réaliser un programme JavaScript qui demande à l'utilisateur de renseigner sa taille et la récupère dans une variable height.
// Convertir cette taille en nombre ; si la taille est mal donnée, height sera mis à zéro.

let height = prompt('Combien mesurez-vous?')
if (!isNaN(height)) {
  height = Number(height)
} else {
  height = 0
}

if (height >= 152) {
    console.log('C\est bon, vous pouvez passer!')
} else {
    console.log('Désolé, il vous manque ' + (152 - height) + 'cm pour pouvoir passer')
}

// On veut réaliser un quiz qui pose une question et la répète tant que la réponse n'est pas trouvée.
// La première question est : « En quelle année fut signé le décret d'abolition de l'esclavage en France ? »
// La bonne réponse, « 1848 », est stockée dans une constante .
// Écrire le programme qui pose la question une fois, récupère la réponse dans une variable et la compare à la bonne réponse, puis affiche « Bonne réponse »si le joueur trouve. Tant que la réponse n'est pas la bonne, afficher « Réessayez ».

const solution = '1848'
let input = prompt(" En quelle année fut signé le décret d'abolition de l'esclavage en France ? ")

while (input !== solution) {
    input = prompt('Réessayer')
}
console.log('Bonne réponse')

// Ajouter une limite de 4 tentatives pour trouver la réponse. « Bonne réponse »ne doit être affiché que si le joueur a trouvé la réponse. Sinon, afficher « Dommage ».

const soluce = '1848'
const max = 4
let attempts = 1
let input1 = prompt(" En quelle année fut signé le décret d'abolition de l'esclavage en France ? ")

while (input1 !== soluce && attempts < max) {
    input1 = prompt('Réessayer')
    attempts +=1
}
if (input === solution) {
    console.log('Bonne réponse')
} else {
    console.log('Dommage')
}