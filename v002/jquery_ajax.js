(function() {

  var deb = document.querySelector('#html'),
      rep = document.querySelector('#myScreen'),
      progressBar = document.querySelector('#maBar'),
      valeur = 805,
      debut = valeur;


  deb.style.fontSize = '25px';
  rep.innerHTML = 'Calcul en Cours...';

//  var contnu = document.querySelector('#aff_js');
  var contnu = document.createElement('ul');
  document.body.appendChild(contnu);
  
// $('#aff_js').html($('#aff_js').html() + '<ul>');
//  contnu.innerHTML = '<ul>';

  monTimer = setTimeout(function() {

    while (!isNaN(valeur)) {
      progressBar.value = ((valeur * 100 - debut) / (1000 - debut));
      deb.innerHTML = ' Fini avec ' + number_format(valeur) + ' comme dernière valeur';
      valeur = ajaxli(valeur).done().responseText;
    }

    rep.innerHTML = 'Calcul terminé.';
    rep.style.color = 'green';

  }, 100);

//$('#aff_js').html($('#aff_js').html() + '</ul>');
  contnu.innerHTML = contnu.innerHTML + '</ul>';



  function ajaxli(value) {

    $.ajaxSetup({async: false});

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
 