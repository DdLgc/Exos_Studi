console.log('--------Exos API fetch -------------')

// Vous disposez du code suivant : complétez la fonction redirectUser() qui devra retourner une nouvelle promesse. Au sein de cette promesse, on fera appel à la fonction askAge().
// Si le résultat de celle-ci est supérieur ou égal à 18, alors la promesse sera résolue, sinon elle sera rejetée.

function askAge() {
  return prompt('Quel âge avez-vous ?')
}   
function success() {
  console.log('Vous êtes majeur, vous pouvez continuer votre navigation')
}
function error() {
  console.log('Vous êtes mineur, vous allez être redirigé vers une autre page')
}
function redirectUser() {
  // code à implémenter
  return new Promise((resolve,reject)=> {
    let age = askAge()
    
    if (age >=18) {
      resolve()
    } else {
      reject()
    }
    
  })
}
redirectUser().then(success, error)



// Au moyen de l'API Fetch, récupérez et affichez les informations de cet utilisateur. Vous disposez des deux fonctions suivantes :
// manageResponse : si le serveur retourne un code HTTP correct (2XX), alors on affichera la réponse au moyen de la méthode json(). Celle-ci retournant une promesse, il conviendra d'enchaîner l'appel des deux fonctions.
// displayData : permettra de résoudre et d'afficher le contenu de la promesse retournée par manageResponse.

function manageResponse(response) {
  if(response.ok){
     return response.json();
  } else {
     console.log(response.status)
  }
 }
 function displayData(data) {
   console.log(data)
 }

const request = fetch('https://reqres.in/api/users/2')
  .then(manageResponse)
  .then(displayData)
  


      // On souhaite récupérer les informations de plusieurs utilisateurs au moyen de l'API     Fetch. On dispose des URL suivantes, que l'on souhaite parcourir et pour lesquelles on    souhaite afficher les ressources associées dans la console.
//   Qu'en cas de succès, on puisse récupérer et afficher le contenu de la réponse en JSON dans la console

// Qu'en cas d'erreur lors de la récupération de la ressource (code différent de 200), on affiche un message en console "Une erreur est survenue, code erreur X" et qu'on retourne un objet vide

// Qu'en cas d'erreur lors du traitement de l'appel (mauvaise URL, par exemple) on affiche l'erreur en console

let urls = [
  'https://reqres.in/api/users/2',
  'https://reqress.in/api/users/3',
  'https://reqres.in/api/users/23'
]
function fetchUrl(url) {
  fetch(url)
    .then((response) => {
        if(response.ok){
            return response.json();
        } else {
          console.log('Une erreur est survenue, code erreur ' + response.status)
          return {}
        }
    })
    .then((data) => {
        console.log(data);
    })
    .catch((error) => console.error(error)); //Traitement de l'erreur dans l'appel
}
urls.forEach(url => fetchUrl(url))