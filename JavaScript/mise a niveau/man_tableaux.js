const ingredient = ['1L de lait', '100g de riz', '5 cuielleres a soupe de sucre', '1 sachet de sucre vanillé', '1zeste de citron']
ingredient[2] = '2.5 cuilléres a soupe de sucre'

console.log('---------Parcours de tableaux----------------')

/** JavaScript */
const subjects = ['Maths', 'Anglais', 'Sport', 'Sciences économiques']
const schedule = ['8h30', '10h30', '14h00', '17h00']

for(let i = 0; i < subjects.length; i++) {
    console.log(subjects[i], schedule[i])
}

for(let i = 0; i < subjects.length; i++) {
    console.log(subjects[subjects.length - 1 - i], schedule[i])
}

console.log('---------tableaux multidimensionnel---------')

// Réaliser le programme JavaScript qui parcours le tableau pour calculer la moyenne de chaque classe. Afficher cette moyenne à côté du numéro de la classe et son numéro.

const notes =[
    [15, 8, 11, 16], // classe 1
    [11, 10, 9, 13], // classe 2
    [12, 15, 15, 9], // classe 3
    [17, 8, 13, 16], // classe 4
    [13, 7, 15, 11]  // classe 5
]
for(let i = 0; i < notes.length ; i++) {
    let sum = 0
    for(let j = 0 ; j < notes[i].length ; j++) {
        sum = sum + notes [i][j]
    }
    console.log('Classe', i + 1 , ':', sum/notes[i].length)
}

console.log('---------opé sur tableaux---------')

// Réaliser un programme JavaScript qui déclare un tableau students.
// Il doit ensuite réaliser autant d'itérations qu'il y a d'élèves et afficher « Élève n°x : »  à chaque itération, avec le bon numéro.
// // On connaît le nombre d'élèves au total : 3.

const students = []
const nbStudents = 3

for (let i = 0 ;i < nbStudents; i++) {
    console.log('Eleve n°' + (i + 1) + ':')
}

// let students = []
// const nbStudents = 28
// for(let i = 0; i < nbStudents; i++) {
//   let name = prompt('Élève n°' + (i+1) + ':')
//   if(name !== '')
//     students.push(name)
// }
// console.log(students.length, 'élèves présents')
// console.log(students.sort())