console.log('--------------notion test unitaire-----------------')

function bubbleSort (unsortedList) {
    const intList = unsortedList.slice()
    for (let i = intList.length - 1; i > 0; i--) {
        for (let j = 0; j < i; j++) {
            if (intList[j + 1] < intList[j]) {
                // Echanger les deux valeurs
                const temp = intList[j + 1]
                intList[j + 1] = intList[j]
                intList[j] = temp
            }
        }
    }
    return intList
}
console.log('--------------notion test unitaire video-----------------')

function removeNonNumber(arr) {
    const res = arr.slice()
    for (let i = 0; i < arr.length; i++) {
        if(isNaN(arr[i])) {
            res.splice(res.indexOf(arr[i]), 1)
        }
    }
    return res
}

function testRemoveNonNumbers() {
    let test = [1, 2]
    let res = removeNonNumber(test)
    console.log(test, res)
    
    test = [1, 'pouet']
    res = removeNonNumber(test)
    console.log(test, res)
    
    test = [1,'42']
    res = removeNonNumber(test)
    console.log(test, res)
}

testRemoveNonNumbers()


console.log('--------------notion test unitaire-----------------')
 
function testBubbleSort () {
    if (bubbleSort([3, 2, 1]).toString() !== [1, 2, 3].toString()) {
        console.log('Test échoué pour [3, 2, 1]')
        return false
    }
    if (bubbleSort([1, 2, 3]).toString() !== [1, 2, 3].toString()) {
      console.log('Test échoué pour [1, 2, 3]')
      return false
    }
    if (bubbleSort([1, 3, 2]).toString() !== [1, 2, 3].toString()) {
        console.log('Test échoué pour [1, 3, 2]')
        return false
    }
    if (bubbleSort([]).toString() !== [].toString()) {
        console.log('Test échoué pour []')
        return false
      }
    console.log('Test réussi')
    return true
}
testBubbleSort()

// Les tests fonctionnent. Mais en revanche, pour être vraiment exhaustifs, il faudrait aussi tester des valeurs aberrantes : envoyer un nombre, une valeur undefined, etc.
// Avec le code actuel, la fonction renverra une erreur. Cette erreur doit être maîtrisée, et il faut le vérifier.

console.log('--------------notion test fonctionnel video fonctionne pas-----------------')

// const profiles = []

// function profileExists(profileId) {
//     for (const profile of profiles) {
//         if (profile.id === profileId) {
//             return true
//         }
//     }
//     return false
// }

// function promptProfileName() {
//     let profile = prompt('Nom du profil ?')
//     if(profile !== '' && isNaN(profile)) {
//         return profile
//     }
//     return undefined
// }

// function generateProfileId(profile) {
//     if (profile.length < 3) {
//         profile =profile.substring(0, 3)
//     }
//     return profile.toLowerCase()
// }

// function createProfile() {
//     profileName = promptProfileName()
//     if (profileName !== undefined) {
//         const id = generateProfileId(profileName)
//         const profile = {
//             id: id,
//             name: profileName
//         }
//         if (profileExists(id)) {
//             return false
//         }
//         profiles.push(profile)
//         return true
//     }
//     return false
// }

// function createProfiles() {
//     let n = prompt('Nombre de profils?')
//     if(!isNaN(n)) {
//         n = numbers(n)
//         for (let i = 0; i < n ; i++) {
//             const res = createProfile()
//             if (!res) {
//                 console.log('Impossible de créer le profiln°', i + 1)
//             }
//         }
//         console.log(profiles)
//     }
//     else {
//         console.log('Nombre Incorrect!')
//     }
// }

// createProfile()

console.log('--------------notion test fonctionnel cours-----------------')

// Voici un exemple simplifié de test fonctionnel de transfert d'argent d'une application bancaire.
// Ici, deux cas sont essayés :
// transférer avec assez de solde,
// // et transférer sans avoir assez de solde.
// Le test fonctionnel sert ici à valider que le transfert échoue si le solde est insuffisant.

/** JavaScript : teste fonctionnellement le transfert d'argent. */
function checkAccount (account, amount) {
    if (account.balance >= amount) {
        return true
    }
    return false
}
function transfer (srcAccount, tgtAccount, amount) {
  // Copies des variables
  const newSrcAccount = { ...srcAccount }
  const newTgtAccount = { ...tgtAccount }
  if (checkAccount(newSrcAccount, amount)) {
      newSrcAccount.balance = newSrcAccount.balance - amount
      newTgtAccount.balance = newTgtAccount.balance + amount
      console.log('Transfert réussi')
    } else {
        console.log('Echec du transfert')
    }
    return [newSrcAccount, newTgtAccount]
}
function testTransfer () {
  let srcAcc = { owner: 'Jean Dupont', balance: 100 }
  let tgtAcc = { owner: 'Anne Martin', balance: 20 }
  let transferRes = transfer(srcAcc, tgtAcc, 60)
  srcAcc = transferRes[0]
  tgtAcc = transferRes[1]
  // Transfert réussi
  if (srcAcc.balance !== 40 || tgtAcc.balance !== 80) {
      console.log('Test transfer échoué lors du premier transfert.')
      return false
    }
    transferRes = transfer(srcAcc, tgtAcc, 60)
    srcAcc = transferRes[0]
    tgtAcc = transferRes[1]
    // Transfert échoué donc les comptes doivent être inchangés
    if (srcAcc.balance !== 40 || tgtAcc.balance !== 80) {
        console.log('Test transfer échoué lors du second transfert.')
        return false
    }
    console.log('Test réussi')
    return true
}
testTransfer()

console.log('--------------notion test fonctionnel exos-----------------')

// Une application bancaire permet d'acheter des produits grâce à la fonction buy que voici :

function checkAccount (account, amount) {
  if (account.balance >= amount) {
    return true
  }
  return false
}
function buy (account, product) {
  // Copie de la variable account
  const newAccount = { ...account }
  if (checkAccount(newAccount, product.price)) {
    newAccount.balance = newAccount.balance - product.price
    console.log('Produit acheté:', product.name)
  } else {
    console.log('Echec de la transaction')
  }
  return newAccount
}
// Les enregistrements gérant un compte sont de la forme suivante :

let account = {
  owner: 'Pierre', 
  balance: 100
}
// Les produits sont de la forme suivante :

const product = {
  name: 'Traces',
  price: 60
}

// Écrire le test fonctionnel testBuy de la fonctionnalité de paiement, qui vérifie qu'un solde suffisant valide l'achat et qu'un solde insuffisant le faire échouer.
// // Tenter d'acheter deux fois le produit avec le compte créé précédemment.
// Vérifier que le test échoue.

function testBuy () {
    let acc = {
        owner:'Jean Dupont',
        balance: 100
    }
    const prod = {
        name: 'Carte graphique',
        price: 60
    }
    acc = buy(acc,prod)
    if (acc.balance !== 40){
        console.log('Test buy échoué sur le premier paiement')
        return false
    }

    acc = buy(acc, prod)
    if (acc.balance !== 40) {
        consoloe.log("tes buy échoué sur le second paiement")
        return false
        }
        console.log('Test réussi')
        return true
}

testBuy()