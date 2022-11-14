$(document).ready(() => {
  $('#introduction').remove()

  let list = $('#goals')

  list.prepend('<li>objectif 0</li>')
  list.apend('<li>objectif 5</li>')
})

console.log('---------------Exos 4-------------')

$(document).ready(() => {
  $('#comment').keyup(function () {
    $('#commentValue').html($(this).val())
  })
});