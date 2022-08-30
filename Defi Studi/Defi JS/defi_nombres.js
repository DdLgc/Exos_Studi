const lengthCube = 2
console.log('Volume du cube: ' + Math.pow(lengthCube, 3) + ' centimètres cube')

const area = 100
const lengthSquare = Math.sqrt(area)
console.log('Perimetre du carré: ' + lengthSquare * 4 + ' mètres')

const nbBears = 15
const nbChildren = 9
console.log('Nombre de peluche(s) par enfant: ' + Math.floor(nbBears / nbChildren))

const swimmingPoolOpened = false
const soccerOpened = !true
const cinemaOpened = !false
console.log("Il est possible d'aller faire du sport à l'extérieur et/ou d'aller au cinéma: " + (swimmingPoolOpened || soccerOpened) || cinemaOpened)

const noteSarah = 14
const noteEmilie = 9
const noteCharles = 10
const studentCount = 20 + 3
const noteSum = (4 * 3) + (2 * 8) + (5 * 9) + (3 * 12) + (6 * 16) + noteSarah + noteEmilie + noteCharles
const averageClass = noteSum / studentCount
const averageFriends = (noteSarah + noteEmilie + noteCharles) / 3
console.log(averageClass)
console.log(averageFriends)

console.log('Note Sarah supérieure à la moyenne de classe:', noteSarah > averageClass)
console.log('Note Emilie supérieure à la moyenne de classe:', noteEmilie > averageClass)
console.log('Note Charles supérieure à la moyenne de classe:', noteCharles > averageClass)
console.log('Moyenne des 3 amis supérieure à la moyenne de classe:', averageFriends > averageClass)