const uls = document.getElementsByTagName('ul');
const active = document.getElementsByClassName('active');
const articles = document.getElementsByTagName('article');
const title = document.getElementsByTagName('h1');
const badge = document.getElementsByClassName('circle');
const colorpicker = document.getElementById('colorpicker');
changeColor = (ev) => {
  const color = ev.target.value;
  for (let i = 0; i < uls.length; i++) {
    uls.item(i).style.background= color;
  }
  for (let i = 0; i < badge.length; i++) {
    badge.item(i).style.background= color;
  }
  for (let i = 0; i < articles.length; i++) {
    articles.item(i).style.borderColor = color;
  }
  for (let i = 0; i < title.length; i++) {
    title.item(i).style.color = color;
  }
  for (let i = 0; i < active.length; i++) {
    active.item(i).firstChild.style.color = color;
  }
}
colorpicker.addEventListener('change', changeColor);