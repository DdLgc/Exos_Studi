class Human {
  constructor (size,weight, age) {
    this.size = size
    this.weight = weight
    this.age = age
  }
}

let henry = new Human('170','90','25')

console.log(henry)
console.log(henry instanceof Human)
console.log(henry.age)


console.log('--------------')

class Personne {
  constructor (nom, prenom, age, sexe, adresse) {
    this.nom = nom
    this.prenom = prenom
    this.age = age
    this.sexe = sexe
    this.adresse = adresse
  }
}

let personne = new Personne ('doe', 'john', 32, 'M', 'Rue de la paix')
console.log(personne.nom, personne.prenom, personne.age, personne.sexe, personne.adresse)

personne.age = 41
personne.adresse = 'Rue des classes en JavaScript'
console.log(personne.nom, personne.prenom, personne.age, personne.sexe, personne.adresse)

console.log('--------------')

// Version ES6
class Personn {
  constructor(nom, prenom, age, sexe, adresse) {
    this.nom = nom
    this.prenom = prenom
    this.age = age
    this.sexe = sexe
    this.adresse = adresse
  }
}
Personn.prototype.changeAge = function(age) {
  this.age = age
    console.log(`${this.prenom} a ${this.age} ans`)
}
let personne1 = new Personn('Doe', 'John', 31, 'M', 'Rue du JavaScript')
let personne2 = new Personn('Doe', 'Ann', 28, 'F', 'Avenue des classes et objets')
personne1.changeAge(41)


