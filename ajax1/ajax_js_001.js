(function() {
  document.title = 'Ajax JS - Base';
  document.getElementById('aff_js').style.width = "200px";

  var xhr = new XMLHttpRequest();

  var valueATransmettre = 777;
  valueATransmettre = encodeURIComponent(valueATransmettre); // Permet d'éviter les caractères spéciaux dans la pseudo URL

  // Envoi des données Méthode 1
  xhr.open('GET', 'null.php?name=été&value=' + valueATransmettre);
  xhr.send(null);
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

  xhr.onreadystatechange = function() {
    // Votre code…
    aff('State: ' + xhr.readyState + ' - Status: ' + xhr.statusText);
//    affp('State: ' + xhr2.readyState + ' - Status: ' + xhr2.statusText + '<br>Header: ' + xhr2.getAllResponseHeaders());
    if (xhr.readyState === 4 && xhr.status === 200) { // 4 = xhr.DONE
      aff('<hr><b>The responseText = <font color="red">' + xhr.responseText + '</font></b>');
    }
  };

aff('Bilan:');


  function aff(output) {
    document.getElementById('aff_js').innerHTML += output + '<br>';
  }

})();
