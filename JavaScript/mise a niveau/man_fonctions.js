function play () {
    const choice = ['Pierre', 'Feuille', 'Ciseaux']
    const index = Math.floor(Math.random() * choice.length)
    console.log(choice[index])
  }
  console.log('Une petite partie?')
  play()
  console.log('Une autre?')
  play()
  console.log('Une dernière!')
  play()
  
  
  console.log('--------------')
  
//   Écrire une fonction qui prend en paramètre une liste de prix hors taxes et quiretourne la liste des prix TTC. Il faut ajouter 20 % à un prix hors taxes pour avoir leprix TTC.

function htToTt (htPriceList) {
    const ttcPriceList = [2, 5, 10]
    for (let i = 0; i < htPriceList.length; i++) {
        const ttcPrice = htPriceList[i] * 1.2
        ttcPriceList.push(ttcPrice)
      }
      return ttcPriceList
  }
  
  //   Voici un code qui ne retourne pas le résultat prévu :
  
  function htToTtc (htPrice) {
      const priceToPay = 1.2 * htPrice
      return priceToPay
}
const prices = [10, 20, 5]
let priceToPay = 0
for (let i = 0; i < prices.length; i++) {
    const currentPrice = htToTtc(prices[i])
  priceToPay = priceToPay + currentPrice
}
console.log('Vous devez payer ', priceToPay)

console.log('--------------')

// Écrire un programme qui utilise la fonction prompt() pour demander la date de naissance de l'utilisateur et afficher ensuite : « Vous êtes né.e le JJ/MM/AAAA ».

const day = prompt('Donner votre jour de naissance')
const month = prompt('Donner votre mois de naissance')
const year = prompt('Donne votre année de naissance')
console.log('Vous êtes né·e le', day, '/', month, '/', year)