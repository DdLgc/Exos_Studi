// On déclare la fonction ici
function factorielle(nombre)
{
  let produit = 1;
  for (let i = 1; i <= nombre; i++) {
    produit *= i;
  }
  if (produit > 100) {
    console.log('Superieur');
  } else {
    console.log('Inferieur');
    console.log(produit);
  }
}
// On appelle la fonction en lui donnant le paramètre 3
factorielle(3);
factorielle(5);

console.log('---------prog orienté objet---------');


class Student
{
  constructor(firstName, lastName)
  {
    this.firstName = firstName;
    this.lastName = lastName;
  }
  getFullName()
  {
    return this.firstName+' '+this.lastName;
  }
}
let megan = new Student('Megan', 'Doe')
let john = new Student('John', 'Doe');
console.log(john.getFullName());
console.log(megan.getFullName());


console.log('---------prog declarative---------');


console.log('---------prog fonctionnelle---------');

function factorielle(nombre)
{
  if (nombre === 0) {
    return 1;
  }
  return nombre * factorielle(nombre - 1);
}
console.log(factorielle(5));