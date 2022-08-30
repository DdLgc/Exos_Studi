// Meilleures ventes
const bestS1 = 'Le petit Prince'
const bestS2 = 'Le mariage de Figaro'
// Livres de la série Narnia
const serie1 = 'Le neveu du magicien'
const serie2 = 'Le prince Caspian'
// Titres sans apostrophe
let error1 = 'Le songe dune nuit dété'
let error2 = 'Le lion, la sorcière blanche et larmoire magique'
// Titres les uns à la suite des autres
const title = 'PhèdreAndromaqueBritannicus'

console.log('Meilleur ventes : ' + bestS1.toUpperCase())
console.log('Meilleur ventes : ' + bestS2.toUpperCase())

console.log('-----------------------')

console.log( 'Narnia :'. concat(' ',serie1 , ', ', serie2))

console.log('-----------------------')

error1 = 'Le songe d\'une nuit d\'été'
console.log(error1)
error2 = 'Le lion, la sorcière blanche et l\'armoire magique'
console.log(error2)

console.log('-----------------------')

const titre1 = title.substring(0 , 6)
const titre2 = title.substring(6 , 15)
const titre3 = title.substring(16 , 27)

console.log(titre1)
console.log(titre2)
console.log(titre3)