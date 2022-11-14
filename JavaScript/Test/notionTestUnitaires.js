const getDayOfDate = (day, month, year) => {
    const d = new Date(year, month, day);
    switch (d.getDay()) {
      case 0:
        return 'Dimanche'
        case 1:
        return 'Lundi'
        case 2:
        return 'Mardi'
        case 3:
        return 'Mercredi'
        case 4:
        return 'Jeudi'
        case 5:
        return 'Vendredi'
        case 6:
        return 'Samedi'
    }
  }

  const test = () => {
      const act = [15, 4 ,2020];

      if(getDayOfDate(...act) === 'Vendredi') {
          return true

      } else {
          return false
        }
        
    }
console.log(test())

console.log('----------Diff type de test----------')

// Un site de e-commerce veut faire des tests sur l'ajout d'articles à un panier.
// Cette fonctionnalité est structurée de cette manière :
// À côté de chaque article, il y a un champ de formulaire permettant de rentrer le nombre d'articles et un bouton Ajoutez au panier.
// Lorsque l'on ajoute au panier un article, cela envoie une requête au serveur, qui enregistre dans la base de données les éléments du panier.
// À partir du code ci-dessous, écrivez les tests unitaires permettant de tester si le type de données concernant la quantité d'articles est bien un number.
// Testez la fonction avec 2 et avec '2'. Si un des tests retourne false, corrigez le problème.

const getArticleNumber = (numberOfArticles) => {
   return numberOfArticles;
}
// Pour réaliser les tests unitaires, on utilisera :
// Arrange : 2 et '2'
// Act : comparaison avec le résultat attendu
// Assert : validation avec un boolean en retour

const testWithNumber = () => {
    const act = 2;

    if(typeof getArticleNumber(act) === 'number') {
        return true

    } else {
        return false
      }
      
  }
const testWithString = () => {
    const act = '2'

    if(typeof getArticleNumber(act) === 'number') {

     return true

    } else {
        return false
      }
}

console.log(testWithString())
console.log(testWithNumber())


// Correction de testWithString qui return false 
// const getArticleNumber = (numberOfArticles) => {
//     return Number(numberOfArticles);
//  }
 