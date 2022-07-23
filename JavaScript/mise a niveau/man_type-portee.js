const nbStrawberries = 4
const type = 'gariguettes'

console.log(type + nbStrawberries)

const bool = true
const number = 16
console.log(bool + number)

const boolean = true
const word = 'magic'
console.log(boolean + word)

console.log('----------conversion ----ou cast ------------')

let nbBirds = 325
nbBirds = String(nbBirds)
console.log(nbBirds[0])

const nbOranges = '47'
const nbBananas = '31'
const nbFruits = (Number(nbOranges) + Number(nbBananas)) // Permet de changer chaine de caractere en nombre
console.log(nbFruits)

console.log('----------declaration prealable des var ------------')

let potatoes
console.log(potatoes)
console.log(typeof(potatoes))

let potato
console.log(potatoes)
console.log(typeof(potato))
potatoes = 15
console.log(potatoes)
console.log(typeof(potato))

console.log('----------portees des variables ------------')

const numberApple = 30
let enoughApple = false
console.log(numberApple)
if(numberApple === 30)
{
    enoughApple = true
    console.log(enoughApple)
}
console.log(enoughApple)

const numberOpple = 30
let enoughOpple = false
console.log(numberOpple)
if(numberOpple === 30)
{
    // let   creé une erreur
      enoughOpple = true            
    console.log(enoughOpple)
}
console.log(enoughOpple)

// Le programme affiche « true » puis « false » car il affiche d'abord la variable enoughApple qui est déclarée dans la boucle if, puis celle qui est déclarée au début du programme, qui sont deux variables différentes avec deux portées différentes.
// Cet exemple illustre que deux variables avec le même nom peuvent référencer deux valeurs différentes, si leur portée est différente.

console.log('----------variables globales ------------')

console.log(flowers)
var flowers = 25
// Le programme va afficher undefined, car la variable flowers a une portée globale mais à partir de la ligne où elle est définie.Ici on essaie d'afficher une variable qui n'a pas encore été déclarée, même pour une variable globale c'est impossible.


