console.log('--------------------instruction conditionnelles alternatives------------------')

let number = 99
if (number < 10 ) {
    console.log(number, 'strictement inférieur à 10')
} else if (number <= 100) {
    console.log(number, 'strictement inférieur à 100')
} else {
    console.log(number)
}

console.log('--------------------Algébre booléen------------------')

const goneOutYest = false
const friendAvail = true
const enoughMoney = true

const goOutToday = friendAvail && enoughMoney && !goneOutYest
console.log(goOutToday)



const age = 15
const res = (age > 18) && (age < 70)
console.log(res )

console.log('--------------------Algébre booléen et sturcture alternative------------------')

// Exos année bissextile

// const annee = Number(prompt('Année ?'))

// if (annee % 4 === 0 && annee % 100 !== 0) {
//     console.log('Oui')
// } else if(annee % 400 === 0) {
//     console.log('Oui')
// } else {
//     console.log('Non')
// }
        
const temperature = 35
if (temperature < 0) {
    console.log(temperature, '°C - Négatif')
} else if (temperature >= 0 && temperature < 40 ) {
    console.log(temperature, '°C - Normal')
}

console.log('--------------------------------------')

const login = 'Elliot'
const password = 'Metasploit'
const authorizedDirectory = '/data'
const accessLevel = 8
if(login === 'Elliot' && password === 'Metasploit') {
    if ( authorizedDirectory === '/data') {
        console.log('Accès autorisé au répertoire', authorizedDirectory)
    }
    if(accessLevel > 5) {
        console.log('Accès autorisé aux informations de niveau 5 ou plus')
    }
}