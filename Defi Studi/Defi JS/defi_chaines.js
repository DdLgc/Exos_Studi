const objet = prompt('Entrez le motif de la convocation')
const lastName = prompt('Entrez un nom')
const firstName = prompt('Entrez un prénom')
const gender = prompt('M ou Mme')
const dateAppointement = prompt('Entrez une date de convocation (dd/mm/yyyy)');
const place = prompt('Entrez un numéro de bureau')
const signature = 'Votre agent administratif';
    
let body = `
À ${lastName.toUpperCase()} ${firstName.toUpperCase()}
  
        Objet de la convocation: ${objet}
    
        ${gender} ${lastName.toUpperCase()} ${firstName.toUpperCase()}, vous êtes convoqué le ${dateAppointement} dans le bureau ${place} dont pour le motif suivant: ${objet}.
    
En vous remerciant.
    
${signature}
`;
    
console.log(body);