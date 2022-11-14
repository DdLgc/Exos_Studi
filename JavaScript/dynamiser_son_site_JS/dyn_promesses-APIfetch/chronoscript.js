startChrono()

const myFirstPromise = new Promise((resolve) => {
  setTimeout(() => {
    resolve()
  }, 1000);
})
const mySecondPromise = new Promise((resolve) => {
  setTimeout(() => {
    resolve()
  }, 3000);
})

Promise
  .all([myFirstPromise,mySecondPromise])
  .then(() => {
    console.log('toutes les promesses sont revenus')
    stopChrono()
  })
// Promise
//   .race([myFirstPromise,mySecondPromise])
//   .then(() => {
//     console.log('au moin une des promesses sont revenus')
//     stopChrono()
//   })


