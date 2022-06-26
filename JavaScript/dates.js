const date1 = new Date();
const date2= new Date('2020-11-20T12:00:00');

console.log(date1);
console.log(date2);

console.log('-----------');

const choresDeadline = new Date(2020, 0, 15, 14, 00, 00);

choresDeadline.setDate(16);
choresDeadline.setMonth(1);
choresDeadline.setFullYear(2021);

choresDeadline.setHours(17);
choresDeadline.setMinutes(11);
choresDeadline.setSeconds(44);

console.log(choresDeadline);

console.log(choresDeadline.getFullYear());
console.log(choresDeadline.getMonth());
console.log(choresDeadline.getDate());

console.log(choresDeadline.getHours());
console.log(choresDeadline.getMinutes());
console.log(choresDeadline.getSeconds());

console.log('-----------');
console.log(choresDeadline);

choresDeadline.setDate(choresDeadline.getDate() + 1)

console.log(choresDeadline);


console.log('------exos setters/getters-----');

const date = new Date(2020, 11, 25)
// 1) Timestamp
console.log(date.getTime()) // 1608850800000
// 2) Month
console.log(date.getMonth()) // 11
// 3) Add time
date.setHours(20)
date.setMinutes(30)
console.log(date) // Fri Dec 25 2020 20:30:00 GMT+0100 (heure normale d’Europe centrale)
// 3) Shorter syntax
date.setHours(20, 30)
console.log(date) // Fri Dec 25 2020 20:30:00 GMT+0100 (heure normale d’Europe centrale)




console.log('------exos manip dates-----');


const origin = new Date (2020, 11, 25, 20, 30);

const result = new Date (
    origin.getFullYear() + 5,
    origin.getMonth() + 6,
    date.getDate(),
    date.getHours() + 12,
    date.getMinutes()
    );

console.log(result);
// Display : Fri Jun 26 2026 08:30:00 GMT+0200 (heure d'été d'Europe centrale)

console.log('------formater les dates-----');

// const bastilleDay = new Date (2020, 6, 14, 18, 00, 00);

// const options = {
//     weekday:'long',
//     year: 'numeric',
//     month: 'long',
//     day:'2-digit'
// };

// console.log(bastilleDay.toLocaleDateString('fr-FR', options));

// console.log(bastilleDay.toLocaleTimeString('fr-FR'));

// const batchDateFormatting = new Intl.DateTimeFormat('fr-FR').format(bastilleDay);

// console.log(batchDateFormatting);

console.log('------exos formater les dates-----');

const date111 = new Date(2020, 11, 25, 20, 30)
const dateDisplayed = new Intl.DateTimeFormat('fr-FR').format(date111)
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }
const dateDisplayedLong = new Intl.DateTimeFormat('fr-FR', options).format(date111)
// 1) Display : 25/12/2020
console.log(dateDisplayed)
// 2) Display : vendredi 25 décembre 2020
console.log(dateDisplayedLong)

// console.log('------exos Days.js-----');
// Besoin du package moment plus a jour !!!

// const orderedAt = moment('2019-12-22 10:45');
// const specialOfferStartedAt = moment('2019-12-18 18:00');
// const specialOfferEndedAt = specialOfferStartedAt.clone().add(10, 'days');
// const hasReducedPrice = orderedAt.isBetween(specialOfferStartedAt, specialOfferEndedAt);
// if (hasReducedPrice) {
    //     console.log('La commande a bénéficié du tarif réduit !')
    // } else {
        //     console.log('La commande a été effectuée en dehors de la période promotionnelle.')
        // }
        
        console.log('------exos mise a niveau-----');


        /** JavaScript */
const today = new Date()
const day = today.getDate()
const month = today.getMonth()
let revolutionaryMonth

if((day >= 22 && month == 8) || (day <= 21 && month == 9)) {
  revolutionaryMonth = 'Vendémiaire'
} else if((day >= 22 && month == 9) || (day <= 21 && month == 10)) {
  revolutionaryMonth = 'Brumaire'
} else if((day >= 22 && month == 10) || (day <= 21 && month == 11)) {
  revolutionaryMonth = 'Frimaire'
} else if((day >= 22 && month == 11) || (day <= 20 && month == 0)) {
  revolutionaryMonth = 'Nivôse'
} else if((day >= 21 && month == 0) || (day <= 19 && month == 1)) {
  revolutionaryMonth = 'Pluviôse'
} else if((day >= 20 && month == 1) || (day <= 21 && month == 2)) {
  revolutionaryMonth = 'Ventôse'
} else if((day >= 22 && month == 2) || (day <= 19 && month == 3)) {
  revolutionaryMonth = 'Germinal'
} else if((day >= 20 && month == 3) || (day <= 19 && month == 4)) {
  revolutionaryMonth = 'Floréal'
} else if((day >= 20 && month == 4) || (day <= 18 && month == 5)) {
  revolutionaryMonth = 'Plairial'
} else if((day >= 19 && month == 5) || (day <= 18 && month == 6)) {
  revolutionaryMonth = 'Messidor'
} else if((day >= 19 && month == 6) || (day <= 17 && month == 7)) {
  revolutionaryMonth = 'Thermidor'
} else if((day >= 18 && month == 7) || (day <= 17 && month == 8)) {
  revolutionaryMonth = 'Fructidor'
} else {
  revolutionaryMonth = 'Jours supplémentaires'
}

console.log(revolutionaryMonth)

/** JavaScript */
const todayy = new Date()
const festivalDate = new Date(2030, 4, 21)
const oneDay = 24 * 60 * 60 // nombre de secondes par jour

const seconds = Math.round((festivalDate.getTime() - todayy.getTime()) / 1000)
console.log(seconds, 'secondes avant le début du festival')
console.log('J-' + Math.floor(seconds / oneDay))
