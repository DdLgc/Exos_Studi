// Réaliser le code JavaScript permettant d’afficher dans une fenêtre de dialogue le code JavaScript permettant d’afficher le tagName de chaque section indépendamment. Un clic doit ouvrir une seule boîte de dialogue.
// Plusieurs réponses possibles.

for (let element of document.querySelectorAll('*')) {
  element.addEventListener("click", (event) => {
    event.stopPropagation();
    alert(` Capturing the element: ${element.tagName}`)
  }, false);
}

// Reponse optimum.