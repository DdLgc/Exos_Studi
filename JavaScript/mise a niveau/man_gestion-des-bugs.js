// Quel est le type de bug présent dans l'exemple suivant (bug dû à une erreur de syntaxe, bug dû à une erreur de logique) ?
// Comment corriger le bug ?
const i = 2
// if i % 2 {
  console.log(i + ' est impair')
// }
// Solution
// C'est un bug de syntaxe : il faut ajouter des parenthèses sur la condition.

const p = 2
if (p % 2) {
  console.log(p + ' est impair')
}

// Question
// Quel est le type de bug présent dans l'exemple suivant (bug dû à une erreur de syntaxe, bug dû à une erreur de logique) ?
// Comment corriger le bug ?
const m = 1
if (m % 2 !== 0) {
  console.log(m + ' est pair')
}
// Solution
// Il s'agit d'une erreur de logique. Ici, si on exécute, on obtient :

// 1 est pair
// Il faut changer le message :

const n = 1
if (n % 2 !== 0) {
  console.log(n + ' est impair')
}
// Ou bien changer la condition :

const o = 1
if (o % 2 === 0) {
  console.log(o + ' est pair')
}