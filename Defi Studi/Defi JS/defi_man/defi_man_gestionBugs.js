console.log('----------calcul HTC------------')


const productsTables =
[['Carnet Capiha Format A6', 4.32, 2 , 0.05],
["Cartouche d'encre bleu Water Melon Man", 2.71, 5, 0.20],
['Stylo plume Carpeur', 26.82, 1, 0.20]]
let dutyFreePrice = 0
for (let line of productsTables) {
    dutyFreePrice = dutyFreePrice + line[1] * line[2]
}
console.log('Total Price: ', dutyFreePrice, ' €')


console.log('----------calcul TVA------------')



const productsTable =
[['Carnet Capiha Format A6', 4.32, 2, 0.05],
["Cartouche d'encre bleu Water Melon Man", 2.71, 5, 0.2],
['Stylo plume Carpeur', 26.82, 1, 0.2]]
let price = 0
for (let line of productsTable) {
    price = price + line[1] * line[2] * (1 + line[3])
}
console.log('Total Price with taxe: ', price.toFixed(2), ' €')


console.log('----------calcul TVA + panier------------')

const productsTablesss = [
    [
        ['Cahier Sombreroche', 7.00, 4, 0.05],
        ['Feutre indélébile générique', 3.99, 5, 0.2],
        ['Stylo à bille Sib', 35, 12, 0.2]
    ],
    [
        ['Carnet Capiha Format A4', 8.23, 1, 0.05],
        ["Cartouche de feuille d'imprimante 90g/m²", 5, 2, 0.2]
    ],
    [
        ['Lot de craies', 3.99, 3, 0.2],
        ['Tableau blanc', 12.00, 1, 0.2]
    ]
]

function computeTaxesProducts(productsTablesss) {
    let price = 0
    for (let line of productsTablesss) {
        price = price + line[1] * line[2] * (1 + line[3])
    }
    return price.toFixed(2)
}
for (let table of productsTablesss) {
    console.log('Total Price with taxe: ', computeTaxesProducts(table))
}
// code apres js-beautify