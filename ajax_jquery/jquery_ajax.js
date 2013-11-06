(function() {

  var deb = document.getElementById('html'),
          rep = document.getElementById('myScreen'),
          valeur = 0;
  rep.innerHTML = 'Calcul en Cours...';


  monTimer = setTimeout(function() {


    while (!isNaN(valeur)) {
      deb.innerHTML = typeof (valeur) + ' => ' + valeur;
      valeur = ajaxli(valeur).done().responseText;

    }

    rep.innerHTML = 'Calcul terminé.';
    rep.style.color = 'green';
  }, 100);



  function ajaxli(value) {

    $.ajaxSetup({async: false});
    var request = $.ajax({
      url: "ajoute_un.php",
      data: {
        value: value
      },
      success: function(retour) {

        if (!isNaN(retour)) {
          $('#aff_js').html($('#aff_js').html() + '<li>' + retour + '</li>');
        }

      }
    });
    return request;
  }
}
)();
 