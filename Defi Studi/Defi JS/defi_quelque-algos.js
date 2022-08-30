// limite = ?
// L = liste des entiers de 2 à limite
// primeNumbers = []

// Tant que L est non vide faire:
//   Ajouter L[0] à nbPremiers
//   i prend la valeur 1
//   Tant que i < longueur(L) faire:
//     Si L[i] est multiple de L[0]:
//       Enlever L[i] de L
//     Sinon:
//       Incrémenter i
//     FinSi
//   FinTantQue
//   Retirer le premier élément de L
// FinTantQue

// Afficher nbPremiers

const limit = Number(prompt())
const L = []
for (let i = 2; i <= limit; i++) {
  L.push(i)
}
const primeNumbers = []
while (L.length > 0) {
  primeNumbers.push(L[0])
  let i = 1
  while (i < L.length) {
    if (L[i] % L[0] === 0) {
      L.splice(i, 1)
    } else {
      i++
    }
  }
  L.splice(0, 1)
}
console.log(primeNumbers)