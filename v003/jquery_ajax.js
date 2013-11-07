(function() {

  var deb = document.querySelector('#deb'),
      rep = document.querySelector('#myScreen'),
      progressBar = document.querySelector('#maBar'),
      list_ul = document.querySelector('#list_ul'),
      valeur = 998,
      debut = valeur,
      fin = 1e3;
  //
  NotifierjsConfig.notificationStyles.width = '200px';
  deb.style.fontSize = '25px';
  //
  rep.innerHTML = 'Calcul en Cours...';
  Notifier.c7('Début du Comptage', 'De ' + debut + ' à...');

//  list_ul.innerHTML = '<ul id=\'myList\'>';


  var i = 0;

//  monTimer = setTimeout(function() {




//    while (!isNaN(valeur) && i < 10) {
  debut = 0;
  fin = 1000;
  var nnn = document.querySelector('#nnn');
  
  for (i = 0; i <= 10000; i++) {
    nnn.value = number_format(i);
    valeur = i;
  }

  deb.innerHTML = debut + '<hr>' + valeur + '<hr>' + fin;
//  valeur++;
  progressBar.value = ((valeur - debut) * 100 / (fin - debut));
//      deb.innerHTML = ' Fini: Dernière valeur = ' + number_format(valeur);


  //valeur = ajaxli(valeur).done().responseText;
//      getResult(valeur);
  i++;



//    }




//  }, 100);

  Notifier.success('Comptage Terminé !', '... ' + fin);
  rep.style.color = 'green';
  rep.innerHTML = 'Calcul terminé.';
//  clearInterval(monTimer);



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

          var deb = document.getElementById('html');
          deb.innerHTML = retour;


//          $('#myList').html($('#myList').html() + '<li>' + number_format(retour) + '</li>');
        }
      }
    });
    return request;
  }

  function getResult(value) { // Effectue une requête et récupère les résultats

    var xhr = new XMLHttpRequest();
    xhr.open('GET', './ajoute_un.php?value=' + encodeURIComponent(value));

    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {

//        displayResults(xhr.responseText);

      }
    };

    xhr.send(null);

    return xhr.responseText;

  }


})();
 