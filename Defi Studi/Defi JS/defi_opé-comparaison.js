const car = {
  type: 'BMW',
  color:'blue',
  doors: 3,
  airConditioner: true
};

const {color, type, doors, airConditioner} = car
const ojectIsValid = color && type && doors && airConditioner;