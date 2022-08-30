// Un ami vous demande de créer une version numérique de son histoire interactive. Il vous remet les morceaux de dialogue de la première partie de l'histoire ainsi que le plan de leur assemblage :
// 1.1 « Vous venez de quitter votre village aujourd'hui. Vous avez versé quelques chaudes larmes en disant au revoir à vos parents et vos amis. Avec un fragile bâton et un chaud manteau à capuche, vous parcourez les chemins enneigés pour réaliser votre rêve... devenir magicien ! Vous vous rendez à l'École des Lumières de Dalmior de Nioden. »
// « Le puissant et célèbre illusionniste Dalmior De Nioden, vous accueille en personne, vous êtes très honoré ! »
// Question 1 :

// « Bienvenu dans mon école, jeune aventurier. Je suis Dalmior De Nioden, le plus puissant des illusionnistes de cette terre. Et toi, quel est ton nom ? »
// Réponse attendue : une chaîne de caractères non vide.
// 1.2 « Et je ne vois pas bien ton visage sous ta capuche, es-tu un garçon ou une fille ? demande Dalmior. »

// Question 2 :

// « 1. un garçon »
// « 2. une fille »
// Réponse attendue : 1 ou 2.
// 1.3 « Bien, dit Dalmior, j'essaierai de m'en souvenir... mmm... comment t'appelles-tu déjà ? Ah ! oui ! *nom*. Parfois, ma mémoire me joue des tours ! »
// « Je te dis au revoir, je dois retourner travailler maintenant. »
// « Et toi aussi, tu dois commencer ton entraînement au plus vite. Je te conseille d'y aller maintenant ! »

// Question 3 :

// «  1. : Suivre le conseil de Dalmior et aller s'entraîner maintenant. »
// « 2. : Ou bien, aller se promener un peu dans le jardin avant. »
// Réponse attendue : 1 ou 2.
// Choix 1 :
// 2.1 « Vous entrez à l'intérieur de l'école des lumières, dans une salle très vaste. Les plafonds sont très hauts et éclairent la salle de lumières multicolores. »
// « Sur la droite, vous apercevez un étrange personnage en train de regarder une boule lumineuse. C'est sûrement votre maître. Mais sur la gauche, il y a un étrange miroir, qui attire votre attention... »
// Choix 2 :
// 3.1 «  Le jardin de l'école est grandiose. »
// « Il est bien fleuri à cette saison, et les fleurs sont très odorantes. »
// « Soudain, vous croisez le jardinier Edgar. Il n'a pas l'air très content de vous voir par ici. »

let nam = "Polo"
let genr = "garçcon"
let choic = " "

console.log("Vous venez de quitter votre village aujourd'hui. Vous avez versé quelques chaudes larmes en disant au revoir à vos parents et vos amis. Avec un fragile bâton et un chaud manteau à capuche, vous parcourez les chemins enneigés pour réaliser votre rêve... devenir magicien ! Vous vous rendez à l'École des Lumières de Dalmior de Nioden. ")
console.log("Le puissant et célèbre illusionniste Dalmior De Nioden, vous accueille en personne, vous êtes très honoré !")
nam = prompt(" Bienvenu dans mon école, jeune aventurier. Je suis Dalmior De Nioden, le plus puissant des illusionnistes de cette terre. Et toi, quel est ton nom ? ")
console.log("Et je ne vois pas bien ton visage sous ta capuche, es-tu un garçon ou une fille ? demande Dalmior.")
genr = prompt("1. un garcon \n 2.une fille ")
console.log(" Bien, dit Dalmior, j'essaierai de m'en souvenir... mmm... comment t'appelles-tu déjà ? Ah ! oui ! " + nam + ". Parfois, ma mémoire me joue des tours !")
console.log( "Je te dis au revoir, je dois retourner travailler maintenant. Et toi aussi, tu dois commencer ton entraînement au plus vite. Je te conseille d\'y aller maintenant ! ")
choic = prompt(" 1. : Suivre le conseil de Dalmior et aller s'entraîner maintenant. \n 2. : Ou bien, aller se promener un peu dans le jardin avant.")

if(choic == 1) {
    console.log("Vous entrez à l'intérieur de l'école des lumières, dans une salle très vaste. Les plafonds sont très hauts et éclairent la salle de lumières multicolores.")
    console.log("Sur la droite, vous apercevez un étrange personnage en train de regarder une boule lumineuse. C'est sûrement votre maître. Mais sur la gauche, il y a un étrange miroir, qui attire votre attention...")
  } else if(choic == 2) {
    console.log("Le jardin de l'école est grandiose.")
    console.log('Il est bien fleuri à cette saison, et les fleurs sont très odorantes.')
    console.log("Soudain, vous croisez le jardinier Edgar. Il n'a pas l'air très content de vous voir par ici.")
  }
  


let name = ''
let genre = ''
let choice = ''
prompt("Vous venez de quitter votre village aujourd'hui. Vous avez versé quelques chaudes larmes en disant au revoir à vos parents et vos amis. Avec un fragile bâton et un chaud manteau à capuche, vous parcourez les chemins enneigés pour réaliser votre rêve... devenir magicien ! Vous vous rendez à l'École des Lumières de Dalmior de Nioden.")
prompt('Le puissant et célèbre illusionniste Dalmior De Nioden, vous accueille en personne, vous êtes très honoré !')
// Demande le nom
while(name == '') {
  name = prompt('Bienvenu dans mon école, jeune aventurier. Je suis Dalmior De Nioden, le plus puissant des illusionnistes de cette terre. Et toi, quel est ton nom ?')
}
// Demande le genre
console.log('Et je ne vois pas bien ton visage sous ta capuche, es-tu un garçon ou une fille ? demande Dalmior.')
while(genre != 1 && genre != 2) {
  genre = prompt('1. un garçon\n2. une fille')
}
console.log("Bien, dit Dalmior, j'essaierai de m'en souvenir... mmm... comment t'appelles-tu déjà ? Ah ! oui ! " + name + '. Parfois, ma mémoire me joue des tours !')
prompt('Je te dis au revoir, je dois retourner travailler maintenant.')
prompt("Et toi aussi, tu dois commencer ton entraînement au plus vite. Je te conseille d'y aller maintenant !")
while(choice != 1 && choice != 2) {
  choice = prompt("1. Suivre le conseil de Dalmior et aller s'entraîner maintenant.\n2. Ou bien, aller se promener un peu dans le jardin avant")
}
if(choice == 1) {
  prompt("Vous entrez à l'intérieur de l'école des lumières, dans une salle très vaste. Les plafonds sont très hauts et éclairent la salle de lumières multicolores.")
  console.log("Sur la droite, vous apercevez un étrange personnage en train de regarder une boule lumineuse. C'est sûrement votre maître. Mais sur la gauche, il y a un étrange miroir, qui attire votre attention...")
} else if(choice == 2) {
  prompt("Le jardin de l'école est grandiose.")
  prompt('Il est bien fleuri à cette saison, et les fleurs sont très odorantes.')
  console.log("Soudain, vous croisez le jardinier Edgar. Il n'a pas l'air très content de vous voir par ici.")
}