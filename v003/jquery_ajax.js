(function() {

  var deb = document.querySelector('#deb'),
      rep = document.querySelector('#myScreen'),
      progressBar = document.querySelector('#maBar'),
      list_ul = document.querySelector('#list_ul'),
      debut = 777,
      fin = 1e3,
      i = debut;
  //
  NotifierjsConfig.notificationStyles.width = '200px';
  deb.style.fontSize = '25px';
  //
  rep.innerHTML = 'Calcul en Cours... (Généré / PHP)';
  Notifier.c7('Début du Comptage', 'De ' + debut + ' à...');


  list_ul.innerHTML = '<ul id=\'myList\'>';

  var monTimer = setInterval(function() {

    deb.style.textAlign = 'center';
    deb.innerHTML = debut + ' <= ' + number_format(i) + ' <= ' + number_format(fin);


    i = ajaxli(i, rep).done().responseText;


    valeur = i;
    progressBar.value = ((valeur - debut) * 100 / (fin - debut));

    if (i >= fin) {

      clearInterval(monTimer);
      Notifier.success('Comptage Terminé !', '... ' + number_format(fin));
      rep.style.color = 'green';
      rep.innerHTML = 'Calcul terminé.';
      list_ul.innerHTML = list_ul.innerHTML + '</ul>';

    }

  }, 0);

  function ajaxli(value, rep) {

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
 