(function() {
  document.title = 'Ajax JS - 001';
  document.getElementById('aff_js').style.width = "200px";

  var xus = {// Objet JSON
    xu1: {
      posts: 6230,
      inscription: '22/08/2003'
    },
    xu2: {
      posts: 200,
      inscription: '04/06/2011'
    }
  },
  string;

  string = JSON.stringify(xus);
  affp('<b>JSON.stringify(objJSON)</b> : ' + typeof string + ' : ' + string); // Affiche : « string : {"index":"contenu"} »
  obj = JSON.parse(string);
  affp('<hr><b>Str => JSON.parse(<i>str</i>)</b> : ' + typeof JSON.parse(string) + ' : ' + JSON.parse(string)); // Affiche : « object : [object Object] »

  affp('<hr>Exemple: xu1 : ' + xus.xu1.inscription);
  myP.innerHTML += '<hr>';

  var xhr2 = new XMLHttpRequest();

  var valueATransmettre = 777;
  valueATransmettre = encodeURIComponent(valueATransmettre); // Permet d'éviter les caractères spéciaux dans la pseudo URL

  // Envoi des données Méthode 1
  xhr2.open('GET', 'null.php?name=Li&value=' + valueATransmettre);
  xhr2.send(null);
  //  
  //  xhr.abort(); // Annule l'envoi et stoppe le xhr
  //
  // Ou
  // 
  // Envoi des données méthodes 2
  /*
   xhr.open('POST', 'ajax_js/ajax_js_001.php');
   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   xhr.send('name=\'li\'&value=' + valueATransmettre);
   */

  xhr2.onreadystatechange = function() {
    // Votre code…
    affp('State: ' + xhr2.readyState + ' - Status: ' + xhr2.statusText);
//    affp('State: ' + xhr2.readyState + ' - Status: ' + xhr2.statusText + '<br>Header: ' + xhr2.getAllResponseHeaders());
    if (xhr2.readyState === 4 && xhr2.status === 200) { // 4 = xhr.DONE
      affp('<hr><b>The responseText = <font color="red">' + xhr2.responseText + '</font></b>');
      var name=777;
      affp('<hr><b>Name = ' + name + 'oOo</b>');
    }
  };


  // Exemple concret
  function loadFile(file) {
    var progression = document.querySelector('#progression div').style,
            xhr = new XMLHttpRequest();
    // Pour juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', file);

    xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
      xhr.onprogress = function(e) {
        progression.width = e.loaded * 100 / e.total + '%'; // Un simple calcul de pourcentage et c'est tout bon !
        // progress.innerHTML = e.loaded + ' / ' + e.total;
      };

      if (xhr.readyState === 4 && xhr.status === 200) { // Si le fichier est chargé sans erreur
        document.getElementById('fileContent').innerHTML = '<span class="retourAjax">' + xhr.responseText + '</span>'; // Et on affiche !
      }
    };
    xhr.send(null); // La requête est prête, on envoie tout !

    xhr.timeout = 10000; // Limite la reque à 10 secondes
//  xhr.abord();
  }

  (function() { // Comme d'habitude, une fonction anonyme pour éviter les variables globales

    var inputs = document.getElementsByTagName('input'),
            inputsLen = inputs.length;

    for (var i = 0; i < inputsLen; i++) {

      inputs[i].onmouseover = function() {
//      inputs[i].onclick = function() {
        loadFile(this.value); // À chaque clic, un fichier sera chargé dans la page
      };
    }
  })();
  affp('<hr>Suite 2...')

})();

