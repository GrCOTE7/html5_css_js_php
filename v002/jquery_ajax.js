(function() {

  var deb = document.querySelector('#html'),
      rep = document.querySelector('#myScreen'),
      progressBar = document.querySelector('#maBar'),
      valeur = 749,
      debut = valeur;


  deb.style.fontSize = '25px';
  rep.innerHTML = 'Calcul en Cours...';


  monTimer = setTimeout(function() {

    while (!isNaN(valeur)) {
      progressBar.value = ((valeur * 100 - debut) / (1e3 - debut - 1));
      deb.innerHTML = ' Fini avec ' + number_format(valeur) + ' comme dernière valeur';
      valeur = ajaxli(valeur).done().responseText;
    }

    rep.innerHTML = 'Calcul terminé.';
    rep.style.color = 'green';

  }, 100);



  function ajaxli(value) {

    $.ajaxSetup({async: false});
    progressBar.value = (valeur * 100 / 1e3);
    var request = $.ajax({
      url: "ajoute_un.php",
      data: {
        value: value
      },
      success: function(retour) {

        if (!isNaN(retour)) {
          $('#aff_js').html($('#aff_js').html() + '<li>' + number_format(retour) + '</li>');
        }

      }
    });
    return request;
  }

})();
 