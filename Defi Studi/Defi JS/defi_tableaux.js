// Colors Array
let colors = ['Bleu', 'Rouge', 'Vert', 'Jaune', 'Blanc']
// 1. Answer ------------------------------
// Array length (5)
console.log(colors.length)
// 2. Answer ------------------------------
// Bleu
console.log(colors[0])
// Blanc
console.log(colors[4])
// Rouge
console.log(colors[1])
// 3. Answer ------------------------------
// for - Display all values
for (let i = 0; i < colors.length; i++) {
  console.log(colors[i])
}
// forEach - Display all values
colors.forEach(function(color){
  console.log(color)
})
// 4. Answer ------------------------------
// JavaScript Multidimensional Array
let colorsMulti = [
  ['Bleu', 'Blanc', 'Rouge'],
  ['Vert', 'Jaune']
]
// 5. Answer ------------------------------
// Blanc
console.log(colorsMulti[0][1])
// Vert
console.log(colorsMulti[1][0])
// 6. Answer ------------------------------
// JavaScript Multidimensional Array - forEach - Display all values of
colorsMulti.forEach(function(arrayColors){
  arrayColors.forEach(function(color){
    console.log(color)
  })
})