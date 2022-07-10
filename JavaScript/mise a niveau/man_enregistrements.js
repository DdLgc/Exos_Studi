// Voici un extrait de code. Le compléter pour qu'il affiche « Bonjour Jean Dupont ».

const usser = {
    firstName : 'jean',
    lastName : 'Dupont'
        }
console.log("Bonjour", usser.firstName, usser.lastName)

// Compléter le code suivant pour qu'il affiche les valeurs de toutes les composantes de cet enregistrement, sauf pseudo.
// Utiliser une boucle for.

const user = {
    pseudo : 'Dupont',
    birthYear : 1990,
    birthMonth : 12,
    birthDar : 12
}

for (const comp in user) {
    if (comp !== 'pseudo') {
        console.log(user[comp])
    }
}

// Ce tableau d'enregistrements décrit une liste d'employés. Compléter ce code pour calculer l'âge moyen des ingénieurs.

const employees = [
    { firstName: 'John', lastName: 'Doe', age: 25, job: 'ingénieur' },
    { firstName: 'Bob', lastName: 'Smith', age: 38, job: 'chercheur' },
    { firstName: 'Jeanne', lastName: 'Smith', age: 40, job: 'ingénieur' },
    { firstName: 'Mathieu', lastName: 'Simpson', age: 59, job: 'secrétaire' },
    { firstName: 'Constance', lastName: 'Martin', age: 40, job: 'directeur' },
    { firstName: 'Robert', lastName: 'Peter', age: 30, job: 'ingénieur' },
    { firstName: 'Richard', lastName: 'Stallman', age: 67, job: 'chercheur' }
  ]

  let counter = 0
  let sum =0
  for (const employee of employees) {
      if ( employee.job === 'ingénieur') {
          sum = sum + employee.age
          counter = counter + 1
      }
  }
  const average = sum / counter
  console.log(average)


//   Écrire la définition de la classe Utilisateur afin que le code suivant soit fonctionnel :
class User {
    constructor () {
      this.firstNamee = ' '
      this.lastNamee = ' '
      this.age = 0
    }
  }
  const jean = new User()
  jean.lastNamee = 'Dupont'
  jean.firstNamee = 'Jean'
  jean.age = 28
  console.log('Bonjour', jean.firstNamee, jean.lastNamee)

