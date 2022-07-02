console.log('---------------exo 1-------------------')
// En utilisant l'opérateur +, affichez la phrase suivante : "Bonjour et bienvenue à l'utilisatrice Caroline".

let newUser = 'Caroline'
let sentence = 'Bonjour et bienvenue à l\'utilisatrice ' + newUser;
console.log(sentence)
console.log(sentence.length)

console.log('---------------exo 2-------------------')


let name = 'rOmAin deLaNoix';
let nameFormated = name.toLowerCase();
// nameFormated.substring(0, 1) // r
// .toUpperCase() // R
let firstNameUpperLetter = nameFormated.substring(0, 1).toUpperCase();
// nameFormated.substring(1, 6) // OmAin
// .toLowerCase() // omain
let firstNameLowerLetter = nameFormated.substring(1, 6).toLowerCase();
// nameFormated.substring(7, 8) // d
// .toUpperCase() // D
let lastNameFirstLetter = nameFormated.substring(7, 8).toUpperCase();
// nameFormated.substring(8) // eLaNoix
// .toLowerCase() // elanoix
let lastNameLowerLetter = nameFormated.substring(8).toLowerCase();
nameFormated = `${firstNameUpperLetter}${firstNameLowerLetter} ${lastNameFirstLetter}${lastNameLowerLetter}`


console.log('^_^')
console.log('___\n| |\n| |\n___')
console.log('###\n# #\n# #\n###')