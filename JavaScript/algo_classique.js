const prices = [1, 39, 25, 112, 111, 30, 211, 300, 5, 67]

let max = prices[0]
for (let i = 1; i < prices.length; i++) {
  if (max < prices[i]) {
    max = prices[i]
  }
}
console.log(max)

console.log('--------------------------')

const teams = ['Bois mort', 'Broom broom', 'Broom broom', 'Snek', 'Snek', 'Merlin FTW', 'Gandalf FTW', 'Merlin FTW', 'Broom broom', 'Bois mort']
const val = 'Broom broom' // La valeur à trouver

for (let i = 0; i < teams.length; i++) {
    if (val === teams[i]) {
        console.log(i)
    }
}



console.log('--creer des paires--')

const vehicles = ['Vélo', 'Trottinette', 'Roller']
const colors = ['Rouge', 'Bleu']
for (let i = 0; i < vehicles.length; i++) {
    for (let j = 0; j < colors.length; j++) {
        console.log(vehicles[i], colors[j])
    }
}

console.log('--suite de Fibonacci--')

const n = 15
const fibo = new Array(n)
fibo[0] = 0
fibo[1] = 1

for (let i =2;i<n ;i++) {
    fibo[i]=fibo[i-1]+ fibo[i-2]
}
console.log(fibo)


console.log('--tri a bulles--')

const scores = [58, 13, 29, 100, 203, 1, 5, 13, 56, 33, 123]
for (let i = scores.length - 1; i > 0; i--) {
    for (let j = 0; j < i; j++) {
      if (scores[j + 1] < scores[j]) {
        // Echanger les deux valeurs
        const temp = scores[j + 1]
        scores[j + 1] = scores[j]
        scores[j] = temp
      }
    }
  }
  console.log(scores.sort())