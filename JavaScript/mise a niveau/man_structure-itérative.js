
let count = 2
for(let i = 0; i < count; i++) {
  console.log('Pause')
}

for(let i = 3; i >= 0; i--) {
    console.log('Temps restant', i, 'secondes')
  }

console.log('----------boucle for -----------------')

for (let i = 0; i < 10; i++) {
    console.log(13 * i)
}

for (let i = 9; i >= 0; i--) {
    console.log(13 * i) 
}

let result = ''
for (let i = 0; i < 4; i++) {
    result = result + 'Toc '
}
console.log(result)

console.log('--------------- While -----------------')

const secretPassword = '4842'
let answer = ''
let attempts = 0

console.log('Mot de passe requis')

while (answer !== secretPassword && attempts < 4) {
    // Attend une réponse
    answer = prompt('**** ')
    attempts = attempts + 1
}

if (answer === secretPassword) {
    console.log('Ouverture du coffre')
} else {
  console.log('Tentatives dépassées. Blocage de toutes les issues')
}

console.log('--------------- Boucle imbriqués -----------------')

// const heigth = 15
// const width = 15
// for(let h = 0; h < heigth; h++) {
//   let line = ''
//   for(let w = 0; w < width; w++) {
//     line = line + '*'
//   }
//   console.log(line)
// }