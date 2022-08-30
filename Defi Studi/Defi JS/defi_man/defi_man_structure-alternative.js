const grade = 'F'

if (grade === 'A') {
    console.log('Mention exceptionnelle')
} else if (grade === 'B' ) {
    console.log('Tres bien ')
}else if (grade == 'C') {
    console.log('Bien ')
} else if (grade === 'D' || grade == 'E') {
    console.log('Admis')
}  else if ( grade == 'F') {
    console.log('Non admis')
} else { 
    console.log('Pas de note')
}
