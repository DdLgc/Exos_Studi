//Exos 1 Vous écrirez une fonction mySandwich annonçant dans une boîte de dialogue deux ingrédients composant un sandwich. L'annonce de la fin du repas doit se faire d'une boîte de dialogue déclenchée par la fonction endSandwich utilisée comme fonction de rappel  

let mySandwich = (param1, param2, callback) => {
  alert('deux ingrédient composent votre sandwich'+ param1 +'et'+ param2)
  callback();
}

const endSandwich = () => {alert('Fini de manger!')}
mySandwich('jambon','fromage', endSandwich)


// Complétez le code ci-dessous afin de rendre ce système opérationnel. Implémentez le contenu des deux promesses. La première vérifiera que le nom d'utilisateur saisi vaut bien "admin", la seconde vérifiera que l'utilisateur a bien répondu "4".
// Les deux promesses seront résolues grâce à la méthode all().


function askUsername() {
  return prompt('Quel est votre nom d\'utilisateur ?')
}   
function askMathOperation() {
  return prompt('Combien font 2 + 2')
}   
function success() {
  console.log('Vous pouvez accéder à l\'application')
}
function error() {
  console.log('Restez où vous êtes')
}
function checkUsername() {
  return new Promise((resolve, reject) => {
    let username = askUsername()

    if('admin' === username) {
      resolve()
    } else {
      reject()
    }
  })
}
function checkIfIsBot() {
  return new Promise((resolve, reject) => {
    
      let result = askMathOperation()
      
      if (4 === parseInt(result)) {
        resolve()
      } else {
        reject()
      }
      
    })
  }

  Promise.all([checkUsername(), checkIfIsBot()]).then(success, error)