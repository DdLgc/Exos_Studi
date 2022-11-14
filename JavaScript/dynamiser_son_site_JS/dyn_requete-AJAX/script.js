// const xhr = new XMLHttpRequest();
// xhr.open('GET', 'https://reqres.in/api/users?page=1');
// xhr.addEventListener('readystatechange', () => {
//     if(xhr.readyState === 4 && xhr.status === 200) {
//         const data = JSON.parse(xhr.response).data;
//         data.forEach(user => {
//           user.name = `${user.first_name} ${user.last_name}`
//         })
//         console.log(data)
//     };
// });
// xhr.send();


console.log('-------2nd exos------------')

// const tbody = document.getElementById('tbody');
// const students = [];
// const createLine = (tbody, student) => {
//   const newRow   = tbody.insertRow();
//   let counter = 0
//   for (const key in student) {
//     const newCell  = newRow.insertCell(counter);
//     const newText  = document.createTextNode(student[key]);
//     newCell.appendChild(newText);
//     counter++
//   }
// }
// const sendForm = (firstName, lastName, grade, numberClass) => {
//   const student = {id: '', firstName, lastName, grade, numberClass};
//   const xhr = new XMLHttpRequest();
//   xhr.open('POST', 'https://reqres.in/api/users');
//   xhr.addEventListener('readystatechange', () => {
//       if(xhr.readyState === 4) {
//          if (xhr.status === 201) {
//           const data = JSON.parse(xhr.response);
//           student.id = data.id;
//           students.push(student);
//           createLine(tbody, student);
//         } else {
//           alert('Erreur')
//         }
//       }
//   });
  
//   xhr.send(student);
// }

          console.log('-------3nd exos------------')
          let users = []
          // fonction pour récupérer la liste des utilisateurs
          const getList = (token) => {
              const newXhr = new XMLHttpRequest();
              newXhr.open('GET', 'https://reqres.in/api/users?page=1');
              newXhr.setRequestHeader('Authorization', token);
              newXhr.addEventListener('readystatechange', () => {
                if(newXhr.readyState === 4) {
                  if (newXhr.status === 200) {
                    users = JSON.parse(newXhr.response).data;
                    console.log(users)
                  } else {
                    alert('Erreur user')
                  }
                }
              });
              newXhr.send();
            }
          // Action au click sur le formulaire
          const sendForm = (email, password) => {
            setTimeout(() => {
              const token = 'ffghthfzszsz654412dsvcds';
              getList(token);
            }, 2000)
          }
          