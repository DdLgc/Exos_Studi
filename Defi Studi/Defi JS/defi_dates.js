// 21 7 2028
// duree 16 j
// date ceremonie d'ouverture
// date ceremonie de fin
// nbr de jours restant avant le debut

const dateStart = new Date(2028, 6, 21);
const dateEnd = new Date(
    dateStart.getFullYear(),
    dateStart.getMonth(),
    dateStart.getDate() +16
)

console.log(dateEnd);

const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

console.log(dateStart.toLocaleDateString('fr-FR', options));
console.log(dateEnd.toLocaleDateString('fr-FR', options));


const currentDate = new Date()
const result = dateStart.getTime() - currentDate.getTime()

console.log(result); //reponse en secondes 198997522769

const days = result / 1000 / 60 / 60 / 24

console.log(days); 
