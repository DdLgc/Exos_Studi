// Nous développons une application d'e-commerce. Il est possible d'acheter les produits grâce à un porte-monnaie virtuel inclus dans l'application. Voici les fonctions de l'application dans un programme montrant comment elles peuvent être utilisées :
// On définit une classe représentant un panier
class Basket {
  constructor (items = [], totalPrice = 0) {
    this.items = items
    this.totalPrice = totalPrice
  }
}
function addToBasket (basket, item) {
  basket.items.push(item)
  basket.totalPrice = basket.totalPrice + item.price
}
function removeFromBasket (basket, item) {
  for (let i = 0; i < basket.items.length; i++) {
    if (JSON.stringify(item) === JSON.stringify(basket.items[i])) {
      basket.items.splice(i, 1)
      basket.totalPrice = basket.totalPrice - item.price
      break
    }
  }
}
function transactionAllowed (userAccount, priceToPay) {
  if (userAccount.balance >= priceToPay) {
    return true
  }
  return false
}
function payBasket (userAccount, basket) {
  if (transactionAllowed(userAccount, basket.totalPrice)) {
    userAccount.balance = userAccount.balance - basket.totalPrice
    console.log('Paiement du panier réussi')
  } else {
    console.log('Paiement du panier échoué')
  }
}
const currentBasket = new Basket()
const item1 = { name: 'Carte mère', price: 100 }
const item2 = { name: 'Carte graphique', price: 300 }
const user = { name: 'Perceval', balance: 500 }
addToBasket(currentBasket, item1)
addToBasket(currentBasket, item2)
// Plus qu'un produit dans le panier
removeFromBasket(currentBasket, item1)
console.log(currentBasket)
payBasket(user, currentBasket)
console.log(user)
// Perceval n'a plus que 200 euros

// Question
// Développer un test unitaire qui ajoute un produit au panier et vérifie que le montant est bien celui prévu. Ce test sera nommé testAdd().
function testAdd () {
  const testBasket = new Basket()
  const item = { name: 'Carte mére', price:100}
  addToBasket(testBasket, item)
  if (testBasket.totalPrice !==100) {
    HTMLFormControlsCollection.log('Test ajout échoué')
    return false
  }
  console.log('test ajout réussi')
  return true
}
testAdd()

// Question
// Développer un test unitaire qui supprime un produit du panier et vérifie que le montant est bien celui prévu. Ce test sera nommé testRemove().
function testRemove () {
  const testBasket = new Basket()
  const item = { name : 'Carte mére', price: 100}
  addToBasket(testBasket, item)
  if (testBasket.totalPrice !== 0) {
    console.log('Test retrait échoué lors du premier retrait')
    return false
  }
  console.log('test retrait réussi')
  return true
}
testRemove()

// Question
// On constate qu'il est possible de factoriser les tests unitaires des fonctions d'ajout et de retrait précédentes.
// Donner le test factorisé nommé testAddRemove().

function testAddRemove () {
  const testBasket = new Basket()
  const item = { name: 'Carte mère', price: 100 }
  addToBasket(testBasket, item)
  if (testBasket.totalPrice !== 100) {
    console.log("Test ajout-retrait échoué lors de l'ajout")
    return false
  }
  removeFromBasket(testBasket, item)
  if (testBasket.totalPrice !== 0) {
    console.log('Test ajout-retrait échoué lors du premier retrait')
    return false
  }
  console.log('Test ajout-retrait réussi')
  return true
}
testAddRemove()

// Question
// Donner maintenant un test unitaire qui teste entièrement la fonction transactionAllowed(). La fonction de test s'appellera testTransactionAllowed().
function testTransactionAllowed () {
  const testUser = { name: 'Perceval', balance: 500 }
  if (!transactionAllowed(testUser, 400)) {
    console.log('Test transactionAllowed échoué pour 400')
    return false
  }
  if (transactionAllowed(testUser, 600)) {
    console.log('Test transactionAllowed échoué pour 600')
    return false
  }
  console.log('Test transactionAllowed réussi')
  return true
}
testTransactionAllowed()

// Question
// Écrire un test fonctionnel pour le règlement d'un panier qu'on nommera testPayBasket(). Le test vérifiera que le solde de l'utilisateur est bien mis à jour après règlement.

function testPayBasket () {
  const testUser = { name: 'Perceval', balance: 500 }
  let testBasket = new Basket()
 addToBasket(testBasket, { name: 'Carte mère', price: 300 })
  payBasket(testUser, testBasket)
  // Paiement réussi
  if (testUser.balance === 200) {
    console.log('Test régler réussi !')
    return true
  }
  payBasket(testUser, testBasket)
  // Paiement échoué car le solde n'a pas changé
  if (testUser.balance !== 200) {
    console.log('Test régler panier échoué lors de la première transaction')
    return false
  }
  console.log('Test de la fonctionnalité de règlement du panier réussi')
  return true
}
testPayBasket()

// Question
// Écrire une fonction testAppEcommerce() qui lance successivement tous les tests. Cette fonction affichera « OK »si tous les tests sont passés, et « ERREUR »sinon.
// Écrire le programme complet permettant de réaliser tous les tests.

// On définit une classe représentant un panier
console.log('--------------------------Enlever commentaire a partir d\'ici----------------------------------');
// class Basket {
//   constructor (items = [], totalPrice = 0) {
//     this.items = items
//     this.totalPrice = totalPrice
//   }
// }
// function addToBasket (basket, item) {
//   basket.items.push(item)
//   basket.totalPrice = basket.totalPrice + item.price
// }
// function removeFromBasket (basket, item) {
//   for (let i = 0; i < basket.items.length; i++) {
//     if (JSON.stringify(item) === JSON.stringify(basket.items[i])) {
//       basket.items.splice(i, 1)
//       basket.totalPrice = basket.totalPrice - item.price
//       break
//     }
//   }
// }
// function transactionAllowed (userAccount, priceToPay) {
//   if (userAccount.balance >= priceToPay) {
//     return true
//   }
//   return false
// }
// function payBasket (userAccount, basket) {
//   if (transactionAllowed(userAccount, basket.totalPrice)) {
//     userAccount.balance = userAccount.balance - basket.totalPrice
//     console.log('Paiement du panier réussi')
//   } else {
//     console.log('Paiement du panier échoué')
//   }
// }
// function testAddRemove () {
//   const testBasket = new Basket()
//   const item = { name: 'Carte mère', price: 100 }
//   addToBasket(testBasket, item)
//   if (testBasket.totalPrice !== 100) {
//     console.log("Test ajout-retrait échoué lors de l'ajout")
//     return false
//   }
//   removeFromBasket(testBasket, item)
//   if (testBasket.totalPrice !== 0) {
//     console.log('Test ajout-retrait échoué lors du premier retrait')
//     return false
//   }
//   console.log('Test ajout-retrait réussi')
//   return true
// }
// function testTransactionAllowed () {
//   const testUser = { name: 'Perceval', balance: 500 }
//   if (!transactionAllowed(testUser, 400)) {
//     console.log('Test transactionAllowed échoué pour 400')
//     return false
//   }
//   if (transactionAllowed(testUser, 600)) {
//     console.log('Test transactionAllowed échoué pour 600')
//     return false
//   }
//   console.log('Test transactionAllowed réussi')
//   return true
// }
// function testPayBasket () {
//   const testUser = { name: 'Perceval', balance: 500 }
//   const testBasket = new Basket()
//   addToBasket(testBasket, { name: 'Carte mère', price: 300 })
//   payBasket(testUser, testBasket)
//   // Paiement réussi
//   if (testUser.balance !== 200) {
//     console.log('Test régler panier échoué lors de la première transaction')
//     return false
//   }
//   payBasket(testUser, testBasket)
//   // Paiement échoué car le solde n'a pas changé
//   if (testUser.balance !== 200) {
//     console.log('Test régler panier échoué lors de la deuxième transaction')
//     return false
//   }
//   console.log('Test de la fonctionnalité de règlement du panier réussi')
//   return true
// }
// function testAppEcommerce () {
//   let success = testAddRemove()
//   success = success && testTransactionAllowed()
//   success = success && testPayBasket()
//   if (success) {
//     console.log('OK')
//   } else {
//     console.log('ERREUR')
//   }
// }
// testAppEcommerce()