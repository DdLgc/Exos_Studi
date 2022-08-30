// Nous souhaitons créer un réseau social en JavaScript. Chaque ami est représenté par un enregistrement contenant son nom et son prénom.
function infoFriend () {
    const lastNameFriend = prompt('Quel est son nom?')
    const firstNameFriend = prompt('Quel est son prénom?')
    return { lastName: lastNameFriend, firstName: firstNameFriend }
}
function addFriend (friends) {
    friends.push(infoFriend())
    return friends
}

function removeFriend (friends) {
  const friendToRemove = infoFriend()
  for (let i = 0; i < friends.length; i++) {
       if (friendToRemove.lastName === friends[i].lastName && friendToRemove.firstName === friends[i].firstName)  { //(JSON.stringify(friendToRemove) === JSON.stringify(friends[i])) maniere de en noter JSon// 
          friends.splice(i, 1)
          break
      }
    }
  return friends
}
let friendList = []
let addFriendChoice = true
console.log('Ajoutons un premier ami')
while (addFriendChoice) {
  friendList = addFriend(friendList.slice())
  addFriendChoice = prompt('Souhaitez-vous ajouter un autre ami? O ou N?') === 'O'
}
console.log('Retirons un ami de votre liste')
friendList = removeFriend(friendList.slice())

console.log("Voici votre liste d'amis:", friendList)


