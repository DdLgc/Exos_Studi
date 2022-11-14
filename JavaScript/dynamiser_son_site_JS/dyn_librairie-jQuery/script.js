
// Test pour la librairie jQuery 
$(document).ready(function() {
  alert('jQuery a bien été inclus')
});

$(function () {
  let element = $('#contact > .username')
  console.log(element)
});

// ciblé ID 

$(function () {
  $('#contact');
  document.getElementById('contact');
    // ciblé classe 
  $('.username');
  document.getElementsByClassName('username');

  let element = $('#contact > .username');
  console.log(element);

  document.querySelector('#contact > .username')
})

$(function () {
  let titleContent = $('#main-title').text()
  console.log(titleContent)

  $('#main-title').text('un nouveau titre')
  $('#main-title').css('color', 'red')

  // chainer les méthodes 
  // $('#main-title').text('un nouveau titre').css('color', 'red')

  let aboutContent = $('#about').html()
  console.log(aboutContent)

});

$(function () {
  $('#box').css({
    'background': 'lightblue',
    'height':'200px',
    'width':'400px',
    'padding': '30px'
  });

  $('#box').click(function(event) {
    alert('la div a été cliqué')
    console.log(event)
  })
})