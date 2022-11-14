// const promesse = new Promise((resolve, reject) => {
//   Tache asynchrone a realiser
//   appel de resolve()si la promesse est résolue (tenue)
//   ou
//   appel de reject() elle est rejeté(rompue)
// })

console.log('-----------exemple cours objet promesse---------')

const someAsyncStuff = new Promise((resolve, reject)=> {
  setTimeout(() => {
    const random = Math.floor(Math.random() * 100);// Retourne un nombre entre 1 et 100
    
    if (random > 50) {
      resolve({ status: 'success', random})
    }
    reject({ status: 'error', random})
  },1000)
})

console.log('------deuxieme partie dexemple du cours------')

// someAsyncStuff
//   .then((response) => {
//     console.log(response)
//   })
//   .catch((error) => {
//     console.log(error)
//   })
//   .finally(() => {
//     console.log('finally')
//   }) autre methode pour faire pareil

const myFunction = async ()=> {
  try {
    const myPromise = await someAsyncStuff
    console.log(myPromise)
  } catch (error) {
    console.log(error)
  }
}
myFunction();



  console.log('-----------exemple cours API fetch---------')

const newPost = {
  title: 'Lorem',
  body: 'lorem bakjbzka azkjdazbnk dnklodejznk jdkezmf',
  userId: 1
}

const request = fetch('https://jsonplaceholder.typicode.com/posts', {
  method:'POST',
  body: JSON.stringify(newPost),
  header: {
    "Content-type": "application/json; charset=UTF-8"
  }
})
request 
  .then((response) => {
    console.log(response)
  })
  .catch((error) => {
    console.error(error)
  })