// L'accès à cette API doit être restreint au possible. Notre administrateur a beau être déjà connecté au site web, on souhaite qu'il décline de nouveau son identité. On souhaite également vérifier qu'il n'est pas un robot en lui faisant effectuer une opération mathématique.

const url = new URL('https://api-adresse.data.gouv.fr/search/?q=8+bd+du+port')

function askUsername() {
  return prompt('Quel est votre nom d\'utilisateur ?')
}   
function askMathOperation() {
  return prompt('Combien font 6 x 7')
}   
function success() {
  console.log('Vous pouvez accéder à l\'application')
}
function error() {
  console.log('Accès refusé')
}
function checkUsername() {
  return new Promise((resolve, reject) => {
    let username = askUsername()
    if ('admin' === username) {
      resolve()
    } else {
      reject()
    }
  })
}
function checkIfIsBot() {
  return new Promise((resolve, reject) => {
    let result = askMathOperation()
    if (42 === parseInt(result)) {
      resolve()
    } else {
      reject()
    }
  })
}
function manageResearch () {
  Promise.all([checkUsername(), checkIfIsBot()]).then(success, error)
}

// Déclarez une constante url contenant l'adresse https://api-adresse.data.gouv.fr/search
// Au sein d'une nouvelle fonction appelée searchAddress, initialisez votre URL en définissant un nouvel objet de type URLSearchParam. Celui-ci contiendra une propriété q dont la valeur correspondra à la valeur de l'input #address
// Vous pourrez vérifier le contenu de l'objet construit grâce à l'instruction suivante : console.log(url.href);.
// La fonction searchAddress sera quant à elle appelée au sein de la fonction success précédemment déclarée.


function searchAddress() {
  let params = {q: document.getElementById("address").value}
  url.search = new URLSearchParams(params).toString()

  fetch(url)
    .then((response) => {
      if(response.ok) {
        return response.json()
      } else {
        console.error("Erreur réponse:" + response.status)
      }
    })
    .then((data) => {
      fillResults(data)
    })
     .catch((error) => console.error(error))  //Traitement de l'erreur dans l'appel
  console.log(url.href)
}

function fillResults(data) {
  let list = document.getElementById('results')
  list.innerHTML = ''
  if(undefined !== data.features) {
    data.features.forEach(function(element) {
      let li = document.createElement('li')
      li.appendChild(document.createTextNode(element.properties.label))
      list.appendChild(li)
    });
  }
}