(function() {
  
  var jli = document.createElement("script");
  jli.type = "text/javascript";
  jli.src = '../sys/lib/fct_li-0.0.1.js';
  document.body.appendChild(jli);

  var deb = document.getElementById('html'),
      rep = document.getElementById('myScreen'),
      progressBar = document.getElementById('maBar'),
      valeur = 0;

  deb.style.fontSize = '25px';
  rep.innerHTML = 'Calcul en Cours...';


  monTimer = setTimeout(function() {

    while (!isNaN(valeur)) {
      progressBar.value = (valeur * 100 / 1e3);
      valeur = ajaxli(valeur).done().responseText;
      deb.innerHTML = ' Fini avec ' + number_format(valeur) + ' comme dernière valeur';
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
 