// On souhaite développer un programme qui demande à l'utilisateur d'entrer une liste de produits à mettre dans un panier et qui les enregistre grâce à une imbrication d'enregistrements. Ensuite, le programme itère sur les enregistrements et retourne le prix du panier. Voici le programme à compléter :
class Item {
    constructor () {
      this.name = ''
      this.price = 0
    }
  }
  let otherItem = true
  const listItem = []
  while (otherItem) {
    const item = new Item()
    item.name = prompt('Donner le nom du produit')
    item.price = Number(prompt('Donner le prix du produit'))
    listItem.push(item)
    otherItem = (prompt('Autre produit? O ou N?') === 'O')
  }
  let sum = 0
  for (const item of listItem) {
    sum = sum + item.price
  }
  console.log(sum)