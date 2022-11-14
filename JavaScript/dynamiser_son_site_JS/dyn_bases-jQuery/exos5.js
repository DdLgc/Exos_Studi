$(document).ready(() => {
  $('.element').keyup(function () {
      $('#elementValue').html($(this).val())
  })
  let form = $('#form')
  form.prepend('<input type="text" id="lastname" name="lastname" class="element" value="" />')
  form.prepend('<label for="lastname">Lastname :</label>')
});

//  Correction de l'exos

// $(document).ready(() => {
//   let form = $('#form')
//   form.on('keyup', '.element', function () {
//       $('#elementValue').html($(this).val())
//   })
//   form.prepend('<input type="text" id="lastname" name="lastname" class="element" value="" />')
//   form.prepend('<label for="lastname">Lastname :</label>')
// });