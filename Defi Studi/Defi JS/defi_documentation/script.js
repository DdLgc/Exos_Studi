// Affectation des variables
const buttonSave = document.getElementById('save')
const buttonReset = document.getElementById('reset')
const welcome = document.getElementById('welcome-message')
const username = document.getElementById('username')

// On vérifie s'il existe une valeur pour la clé 'name' dans le localStorage
if (localStorage.getItem('name')) {
  // Message de bienvenue personnalisé si oui
  welcome.textContent = 'Bienvenue ' + localStorage.getItem('name')
} else {
  // Message de bienvenue générique si non
  welcome.textContent = 'Bienvenue nouveau visiteur, quel est votre nom ?'
}
// La méthode 'addEventListener' permet de lier le click d'un bouton à une action, 
// c'est une notion qui sera abordée plus tard dans le cours sur la programmation événementielle
buttonSave.addEventListener('click', () => {
  // On enregistre le nom de l'utilisateur avec la clé 'name' dans le localStorage
 localStorage.setItem('name', username.value)


  // On modifie le message de bienvenue
  welcome.textContent = 'Bienvenue ' + localStorage.getItem('name')
  // On réinitialise la valeur du champ de saisie(input)
  username.value = ""
})
// La méthode 'addEventListener' permet de lier le click d'un bouton à une action, 
// c'est une notion qui sera abordée plus tard dans le cours sur la programmation événementielle
buttonReset.addEventListener('click', () => {
  // On supprime la clé/valeur 'name' du localStorage
  localStorage.removeItem('name')
  // On remet le message de bienvenue générique
  welcome.textContent = 'Bienvenue nouveau visiteur, quel est votre nom ?'
})


// Vous allez devoir permettre au visiteurs du blog d’enregistrer leur nom afin d’avoir un message de bienvenue personnalisé et ce même après le rafraîchissement de l’écran. Votre blog comporte un bouton permettant d’enregistrer le nom de l’utilisateur et un autre pour le réinitialiser. Techniquement, il vous faut créer une clé/valeur ayant pour nom de clé ‘name’ et en valeur le nom du visiteur, le tout enregistré dans le localStorage. Pour vous aider, le code javascript a déjà été écrit, cependant, pour rendre le code fonctionnel vous allez devoir le compléter à trois endroits avec les différentes méthodes du localStorage.