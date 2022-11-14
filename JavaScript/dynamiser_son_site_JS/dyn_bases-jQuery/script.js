$(() => {
  $('#click-me').click(function () {
    console.log('boom!')
    console.log('#click-me')
    console.log(this)
  });
});

$(() => {
  let title = $('h1').html()
  console.log(title)

  $('h1').html('le nouveau titre')

  let fontStack = $('h1').css('font-family')
  console.log(fontStack)

  $('h1').css('color','#ff4757')
})

$(() => {
  $('li').click(function () {

     $('li').each(function() {  //jQuery va aplliquer le removeclass sans le each
      $(this).removeClass('active');
    });

    $(this).addClass('active');
  });
});

// Permet de mettre un minuteur
$(() => {
  $('#click-me').data('timer', 5000)

  $('#click-me').click(function () {
    setTimeout(() => {
      console.log('boom!')
    }, $('#click-me').data('timer'))
    })
  })



  // Exemple pour l'animation de la box

$(() => {
  $('#hide-box').click(function () {
    $('.box').hide(1000, function() {
      console.log('la boite est maintenant caché ')
    })
  })

  $('#show-box').click(function () {
    $('.box').show(400)
  })
})

// Fade-in / fade-out fonctionne pareil juste l'animation est différente


$(() => {
  $('#trigger-animation').click(function () {
    $('.box').animate({
      width:'80%',
      borderRadius: '45px'
    }, 1000, function() {
      console.log('animation terminé')
    })
  })
})