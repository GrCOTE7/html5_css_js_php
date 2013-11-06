(function() {

  var deb = document.querySelector('#html'),
      rep = document.querySelector('#myScreen'),
      progressBar = document.querySelector('#maBar'),
      list_ul = document.querySelector('#list_ul'),
      valeur = 905,
      debut = valeur,
      fin = 1e3;
  //
  NotifierjsConfig.notificationStyles.width = '200px';
  deb.style.fontSize = '25px';
  //
  rep.innerHTML = 'Calcul en Cours...';
  Notifier.c7('Début du Comptage', 'De ' + debut + ' à...');

  list_ul.innerHTML = '<ul id=\'myList\'>';

  monTimer = setTimeout(function() {

    while (!isNaN(valeur)) {
      progressBar.value = ((valeur * 100 - debut) / (fin - debut));
      deb.innerHTML = ' Fini avec ' + number_format(valeur) + ' comme dernière valeur';
      valeur = ajaxli(valeur).done().responseText;
    }
    Notifier.success('Comptage Terminé !', '... ' + fin);
    rep.innerHTML = 'Calcul terminé.';
    rep.style.color = 'green';
  }, 100);

  function ajaxli(value) {

    $.ajaxSetup({async: false});

    var request = $.ajax({
      url: "ajoute_un.php",
      data: {
        value: value,
        fin: fin
      },
      success: function(retour) {
        if (!isNaN(retour)) {
          $('#myList').html($('#myList').html() + '<li>' + number_format(retour) + '</li>');
        }
      }
    });
    return request;
  }

})();
 