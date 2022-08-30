// On stocke les prix
const priceApple = 0.32;
const pricePear = 0.44;
// On stocke les quantités
const quantityAppleSold = prompt('Saisissez un nombre de pommes');
const quantityPearSold = prompt('Saisissez un nombre de poires');
// Recette réalisée pour chaque fruit
const priceTotalApple = priceApple * quantityAppleSold;
const priceTotalPear = pricePear * quantityPearSold ;
// Chiffre d'affaires
const turnover = priceTotalApple + priceTotalPear;
// On crée l'alerte qui affichera les informations à l'utilisateur
alert('pommes => quantité : ' + quantityAppleSold + ', chiffre d\'affaire: ' + Math.round(priceTotalApple * 100) / 100 + '€ \n' +
'poires => quantité : ' + quantityPearSold + ', chiffre d\'affaire: ' + Math.round(priceTotalPear * 100) / 100 + '€ \n' +
'chiffre d\'affaire => ' + Math.round(turnover * 100) / 100 + '€');