// Pour les besoins de notre site e-commerce, nous avons besoin de créer un bouton de connexion. En utilisant uniquement le JavaScript :
// Créez un bouton HTML Connexion avec un fond vert et une couleur de texte blanche.
// Au clic, affichez un message dans une popup : Vous avez cliqué sur le bouton de connexion.
// Au passage de la souris, changez la couleur du bouton en rouge.
// Lorsque la souris sort du bouton, réinitialisez la couleur d'origine du bouton.

const connexion = document.getElementById('connexion')

const getAMessage = () => {
  alert('Vous avez cliqué sur le bouton de connexion ')
}

const setColorGreen = () => {
  connexion.style.background='green'
}

const setColorRed = () => {
  connexion.style.background='red'
}

connexion.addEventListener('click', getAMessage)
connexion.addEventListener('mouseenter', setColorRed)
connexion.addEventListener('mouseleave', setColorGreen)