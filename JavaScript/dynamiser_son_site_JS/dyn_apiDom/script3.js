let inputText = document.getElementById('email')
for(let attribut of inputText.attributes) {
  console.log(attribut)
}
let inputTextId = inputText.getAttribute('id')
console.log(inputTextId)
let checkbox = document.getElementById('connexion')
if (checkbox.hasAttribute('checked')) {
  console.log(checkbox.getAttribute('checked'))
  checkbox.removeAttribute('checked')
}
let form = document.querySelector('form')
for(element of form.elements) {
  if (!element.hasAttributes()) {
    console.log(`Cette élément n'a pas d'attributs : ${element}`);
  }
}