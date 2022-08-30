// Avec l'aide de boucles imbriquées, vous devrez afficher en console 
// les tables de multiplication de 1 à 9 de la manière suivante :

let i = 1;
while (i < 10) {
  console.log(`=== table de ${i} ===`)
  for(let y = 1; y < 10; y++) {
    console.log(`${y} x ${i} = ${i*y}`);
  }
  i++;
}