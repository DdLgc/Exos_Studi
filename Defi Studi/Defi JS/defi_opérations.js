// Pierre, Jeanne est Paul jouent aux billes pendant la récréation.
// Pierre a 10 billes, Jeanne en a 15 et Paul, 5.
// À chaque partie, le joueur gagnant prend la bille de ses adversaires.
// Pierre gagne les deux premières parties.
// Jeanne gagne la troisième.
// Paul la quatrième, et Jeanne la cinquième.
// Jeremy arrive avec un sac plein de calots et propose à chacun d’échanger ses calots contre des billes, avec chacun un arrangement différent
// Pour Pierre, 1 calot = 4 billes.
// Pour Jeanne, 1 calot = 2 billes.
// Pour Paul, 1 calot = 3 billes.
// Pierre, Paul et Jeanne décident d'échanger le maximum de billes avec Jeremy.
// Pour réaliser cet exercice, vous aurez besoin de travailler sur l'environnement de travail :

let billesPierre = 10;
let billesJeanne = 15;
let billesPaul = 5;
// partie 1 et 2
billesPierre += 4;
billesJeanne -= 2;
billesPaul -= 2;
// partie 3 et 5
billesJeanne += 4;
billesPierre -= 2;
billesPaul -= 2;
// partie 4
billesPaul += 2;
billesPierre--;
billesJeanne--;
// l'échange avec Pierre
const billesRestantesPierre = billesPierre % 4;
const boulardsPierre = (billesPierre - billesRestantesPierre) / 4;
console.log(billesRestantesPierre); // 3
console.log(boulardsPierre); // 2
// l'échange avec Jeanne
const billesRestantesjeanne = billesJeanne % 2;
const boulardsjeanne = (billesJeanne - billesRestantesjeanne) / 2;
console.log(billesRestantesjeanne); // 0
console.log(boulardsjeanne); // 8
// l'échange avec Paul
const billesRestantesPaul = billesPaul % 3;
const boulardsPaul = (billesPaul - billesRestantesPaul) / 3;
console.log(billesRestantesPaul); // 0
console.log(boulardsPaul); // 1