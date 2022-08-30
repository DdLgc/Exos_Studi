// Simule l'information du beau temps.
function isGoodWeather () {
    return Math.random() < 0.20
  }
  let goodDays = 0
  for (let g = 0; g < 365; g++) {
    if (isGoodWeather()) {
      goodDays++
      console.log('Jour ' + g + ': il fait beau')
    } else {
      console.log('Jour ' + g + ': il fait moche')
    }
  }
  const percent = Math.round(goodDays / 365 * 100)
  console.log('Pourcentage de jours beaux dans l\'année: ' + percent + '%')
  
  
  console.log('---------------------------------------------------------')
  
  let goodDay = false
  let i = 0

  while (!goodDay) {
      goodDay = isGoodWeather()
      if ( goodDay) {
          console.log('Jour' + i + ':il fait beau je sors!')
        } else {
            console.log('Jour' + i + ': je sortirai demain...')
        }
        i++
    }

    console.log('---------------------------------------------------------')

for ( let j = 1; j < 53 ; j++) {
    let goodDday = false
    let weekday = 1

    while (!goodDday && weekday <= 7) {
        goodDday = isGoodWeather()

        if (goodDday) {
            console.log('Je suis sorti cette semaine' + j + ',lejour' + weekday)
        }
        weekday++
    }
}