const bookListJanuaryEstimations = 
[
  ['Les Fleurs du Mal', 7.00, 7.00],
  ['La Guerre des Intelligences', 20.90, 1.23],
  ['Inferno', 9.99, 5.30]
]
function estimateCashOnSell(bookList) {
    let amountEstimate = 0
    for (const book of bookList) {
        amountEstimate = amountEstimate + book[2]
    }
    return amountEstimate
}
let totalCash = 0
totalCash = estimateCashOnSell(bookListJanuaryEstimations)
console.log('Estimation de la vente en Janvier:', totalCash.toFixed(2), '€')


                console.log('-----------------------')

const BookListJanuaryEstimations = 
[
    ['Les Fleurs du Mal', 7.00, 7.00],
    ['La Guerre des Intelligences', 20.90, 1.23],
    ['Inferno', 9.99, 5.30]
]
let BookListFebruaryEstimations = BookListJanuaryEstimations
BookListFebruaryEstimations[0][2] = 8.23
BookListFebruaryEstimations[1][2] = 0.52
function EstimateCashOnSel(bookList) {
    let amountEstimate = 0
    for (const book of bookList) {
        amountEstimate = amountEstimate + book[2]
    }
    return amountEstimate
}
const totalCashJanuary = EstimateCashOnSel(BookListJanuaryEstimations)
console.log('Estimation de la vente en Janvier:', totalCashJanuary.toFixed(2), '€')
const totalCashFebruary = EstimateCashOnSel(BookListFebruaryEstimations)
console.log('Estimation de la vente en Février:', totalCashFebruary.toFixed(2), '€')

// On obtient un résultat différent pour janvier car on a en réalité partagé une valeur de type composé (le tableau) entre les deux variables bookListJanuaryEstimations et bookListFebruaryEstimations. Ainsi les modifications faites via bookListFebruaryEstimations sont rendues visibles à partir de bookListJanuaryEstimations, d'où un résultat identique pour les deux mois et qui se base sur les prix estimés pour Février.
                console.log('-----------------------')

const deepCopy = (items) => items.map(item => Array.isArray(item) ? deepCopy(item) : item)
const bookListJanuaryEstimatio = 
[
  ['Les Fleurs du Mal', 7.00, 7.00],
  ['La Guerre des Intelligences', 20.90, 1.23],
  ['Inferno', 9.99, 5.30]
]
let bookListFebruaryEstimatio = deepCopy( bookListJanuaryEstimatio)
bookListFebruaryEstimatio[0][2] = 8.23
bookListFebruaryEstimatio[1][2] = 0.52
function estimateCashOnSe(bookList) {
  let amountEstimate = 0
  for (const book of bookList) {
    amountEstimate = amountEstimate + book[2]
  }
  return amountEstimate
}
const totalCashJanua = estimateCashOnSe(bookListJanuaryEstimatio)
console.log('Estimation de la vente en Janvier:', totalCashJanua.toFixed(2), '€')
const totalCashFebrua = estimateCashOnSe(bookListFebruaryEstimatio)
console.log('Estimation de la vente en Février:', totalCashFebrua.toFixed(2), '€')


// La méthode Object.assign ne réalise qu'une copie superficielle du tableau : ainsi, les valeurs contenues dans les tableaux imbriqués ne sont pas recopiées et sont partagées entre les deux variables, et on rencontre le même problème que précédemment. Pour résoudre ce problème, c'est-à-dire pour recopier toutes les valeurs, il faut utiliser une copie récursive.