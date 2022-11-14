$(document).ready(() => {
  // On insère dans #introduction-copy le contenu lu dans #introduction
  $('#introduction-copy').html($('#introduction').html())

  $.data( goals, "goals", {
    0 : "Récupérer le code HTML",
    1 : "Modifier le CSS",
    2 : "Parcourir une liste d'éléments",
    3 : "Associer des données à un élément"
  })
  $('#goals li').each(function(index) {
    $(this).text($.data( goals, "goals" )[index])
  })
});

