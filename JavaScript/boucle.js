console.log('-------exos quest quune boucle ----------')

// Dans cet exercice, nous avons une variable totale qui est initialisée à zéro et que nous allons incrémenter de 1 tant qu'elle est inférieure à 20.
// Écrivez en pseudo-code cette boucle "TANT QUE".

// total = 0
// TANT_QUE total INFÉRIEUR À 20 FAIRE
//   total = total + 1
// FIN_TANT_QUE

console.log('-------exos boucle for----------')

// Écrivez une boucle for en JavaScript qui initialise i à 0 ; tant que sa valeur est inférieure à 6 i s’incrémente de 1 en 1.

let total = 0

while (total < 10) {
    total++
    console.log(total)
}
	
do {
    total++
    console.log(total)
} while (total < 10)

console.log('-------exos compteur nombre----------')

// Vous disposez des instructions suivantes : on cherche à connaître le nombre de fois où la lettre "é" apparaît dans le prénom "Jérémy".
// Écrivez la trace correspondante

let totall = 0

while (totall < 10) {
    totall++
    console.log(totall)
}

do {
    totall++
    console.log(totall)
} while (totall < 10)

console.log('-------exos boucles imbriquées----------')

// En utilisant des boucles imbriquées, vous reproduirez l'affichage suivant dans la console du navigateur.

let row;
for (let i = 0; i <= 10; i++) {
  row = '';
  for (let j = 0; j < i; j++) {
    row += j + ' ';
  }
  console.log(row);
}
