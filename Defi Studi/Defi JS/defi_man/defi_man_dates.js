const today = new Date()
const day = today.getDay()

const format = {
  weekday: 'long',
  year: 'numeric',
  month: 'long',
  day: 'numeric'
}
console.log(today.toLocaleDateString('fr-FR', format))

if (day === 1) {
  console.log('Récupérer les clés du logement')
} else if (day === 2) {
  console.log('Visite chez le dentiste')
} else if (day === 3) {
  console.log('Soutenance projet')
} else if (day === 4) {
  console.log('Entretien téléphonique pour le stage')
} else if (day === 5) {
  console.log('Rendez-vous à 22h au Macadam')
} else if (day === 6) {
  console.log('Séance de cinéma Les Misérables à 20h00')
} else if (day === 0) {
  console.log('Emmener les enfants à leur match')
}

console.log('----------------2nd exos----------------')

const oneDay = 24 * 60 * 60 * 1000 // millisecondes d'un seul jour
const choupetteBirthday = new Date(today.getFullYear(), 4, 1)

// ajoute un an si l'anniversaire de l'année en cours est passé
if (choupetteBirthday.getMonth() < today.getMonth()) {
choupetteBirthday.setFullYear(choupetteBirthday.getFullYear() + 1)
}
else if(choupetteBirthday.getMonth() == today.getMonth() && choupetteBirthday.getDate() < today.getDate()) {
choupetteBirthday.setFullYear(choupetteBirthday.getFullYear() + 1)
}

const countMilliseconds = (choupetteBirthday - today) // millisecondes qui séparent les deux dates
const countDays = Math.floor(countMilliseconds / oneDay) // nombre de jours arrondi à l'entier inférieur

console.log('L\'anniversaire de Choupette a lieu le ' + choupetteBirthday.getDate() + '/' + (choupetteBirthday.getMonth() + 1) + '/' + choupetteBirthday.getFullYear() + ' dans ' + countDays + ' jours')