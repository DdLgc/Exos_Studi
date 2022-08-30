let nbRoses = 1478
nbRoses = String(nbRoses)

let nbHundreds = nbRoses.substring(0, nbRoses.length - 2)
nbHundreds = Number(nbHundreds)

let nbTens = nbRoses.substring(0, nbRoses.length - 1)
nbTens = Number(nbTens)

let nbMedium = (nbTens * 10) / 30
nbMedium = Math.floor(nbMedium)
const nbSmall = nbTens - nbMedium * 3

let nbUnities = nbRoses[nbRoses.length - 1]
nbUnities = Number(nbUnities)

console.log('Nombre de gros bouquets:' + nbHundreds)
console.log('Nombre de bouquets moyens:' + nbMedium)
console.log('Nombre de petits bouquets:' + nbSmall)
console.log('Nombre de roses vendues à l\'unités :' + nbUnities)