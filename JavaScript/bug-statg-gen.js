const listeNumber = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24,
    25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49]
const winNumbers = [];
const complementaryNumbers = []
function randomInInterval(min, max){
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
function addToTable(table, tableRef) {
  const index = randomInInterval(0, tableRef.length - 1)
  table.push(tableRef[index]);
  tableRef.splice(index, 1);
}
function tirage(size, table, tableRef) {
  while (table.length < size) {
    addToTable(table, tableRef)
  }
}
tirage(5, winNumbers, listeNumber);
tirage(2, complementaryNumbers, listeNumber);
console.log(winNumbers, complementaryNumbers);


console.log('------------Resolution des bugs----------------------');


const listTemperature = {
    month: 'January',
    tempPerDay : [
      {day: 1, temp: 15},
      {day: 2, temp: 10},
      {day: 3, temp: 14},
      {day: 4, temp: 20},
      {day: 5, temp: 18},
      {day: 6, temp: 17},
      {day: 7, temp: 15},
      {day: 8, temp: 16},
      {day: 9, temp: 15},
      {day: 10, temp: 9},
      {day: 11, temp: 10},
      {day: 12, temp: 13},
      {day: 13, temp: 14},
      {day: 14, temp: 11},
      {day: 15, temp: 12},
      {day: 16, temp: 16},
      {day: 17, temp: 17},
      {day: 18, temp: 14},
      {day: 19, temp: 15},
      {day: 20, temp: 11},
      {day: 21, temp: 11},
      {day: 22, temp: 10},
      {day: 23, temp: 19},
      {day: 24, temp: 22},
      {day: 25, temp: 18},
      {day: 26, temp: 17},
      {day: 27, temp: 16},
      {day: 28, temp: 13},
      {day: 29, temp: 15},
      {day: 30, temp: 20},
      {day: 31, temp: 22}
    ]
  }
const tableTemp = []
for (let counter = 0; counter < listTemperature.tempPerDay.length; counter++) {
  if (listTemperature.tempPerDay[counter].temp > 20) {
    tableTemp.push(listTemperature.tempPerDay[counter].temp);
  }
}
console.log(tableTemp)