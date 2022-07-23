const arr = [4 , 'Référence']
const arrRef = arr
arrRef[0] = arrRef[0] + 1
console.log(arr , arrRef)
console.log(arrRef === arr)

// Modifier le code pour savoir si ces deux variables référencent la même valeur ?
let prixAbricot = 4
let prixPeche = 4
console.log(prixAbricot === prixPeche)
// On obtient true, ce qui indique que les deux variables référencent la même valeur.


let fruit = 'abricot'
let codeFruit = 104910
fruit = codeFruit
console.log(fruit === codeFruit)
// On obtient true, ce qui indique que les deux variables référencent la même valeur, ici l'entier 104910.

const codeAbrico = 104910
const panierLund = [codeAbrico]
const panierMard = [codeAbrico]
console.log(panierLund === panierMard)

// On obtient false, ce qui indique que les deux tableaux ne référencent pas la même valeur : il s'agit bien en effet de deux tableaux différents que l'on crée, même si chacun référence la même valeur 104910.

const codeAbricot = 104910
const panierLundi = [codeAbricot]
const panierMardi = [codeAbricot]
const premierFruitPanierLundi = panierLundi[0]
const premierFruitPanierMardi = panierMardi[0]
console.log(premierFruitPanierLundi === premierFruitPanierMardi)
// On obtient true, ce qui indique que les deux variables référencent la même valeur : il s'agit bien en effet de deux tableaux différents mais ils ont bien une même valeur en commun.

let basket = {
    'Le Tour du monde en quatre-vingts jours': 53.90,
    'Les Misérables': 12.90,
    'À la recherche du temps perdu': 34.90
  }
  let secondBasket = basket
  let thirdBasket = Object.assign({}, basket)
  secondBasket['Le Tour du monde en quatre-vingts jours'] = 12.00
  thirdBasket['À la recherche du temps perdu'] = 31.12
  let fourthBasket = secondBasket
  fourthBasket['Les Misérables'] = 7.90
  console.log(thirdBasket)
  
    // thirdBasket a la valeur suivante : {
    //       'Le Tour du monde en quatre-vingts jours' = 53.9
    //       'Les Misérables' = 12.9
    //      ​ 'À la recherche du temps perdu' = 31.12
    //       }
    //Dans ce premier cas, thirdBasket référence une nouvelle structure via une copie de la valeur contenue dans basket.
    //Cette structure ne subit qu'un changement : celui via thirdBasket (modification du prix de 'À la recherche du temps perdu').
    //Elle ne subit pas de changements via les modifications réalisées sur secondBasket et sur fourthBasket.
                        console.log('------------------------------------------------')     

let age = 23
let names = ['Luke', 'George', 'Simpsons']
function changeIdentity (age, names) {
    age = age + 12
    // Suppression des valeurs existantes
    names.splice(0, names.length)
    // Ajout de nouvelles valeurs
    names.push('John')
    names.push('Albert')
    names.push('Smith')
  }
  console.log(age, names)
  changeIdentity(age, names)
  console.log(age, names)

//   La variable age référence un type primitif, tandis que la variable names référence un type composé. Ainsi, dans et en dehors de la fonction :

// La variable age n'a pas la même référence ; ici la variable est passée par valeur puisque c'est un type primitif (un entier) : cela explique pourquoi sa valeur n'est pas affectée.

// La variable names a la même référence ; la variable est passée par référence puisque c'est un type composé (un tableau) : cela explique pourquoi sa valeur est changée.