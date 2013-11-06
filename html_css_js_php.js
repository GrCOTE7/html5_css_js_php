(function() {
  aff('');
  var xhr = new XMLHttpRequest();
  if (window.XMLHttpRequest) // FIREFOX
    xhr_object = new XMLHttpRequest();
  else if (window.ActiveXObject) // IE
    xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
  else
    return(false);

  var valueATransmettre = 777;
//  while (valueATransmettre < 778) {

  valueATransmettre = encodeURIComponent(valueATransmettre);

  xhr.onreadystatechange = function() {
    // aff('State: ' + xhr.readyState + ' - Status: ' + xhr.statusText + '<br>Header: ' + xhr.getAllResponseHeaders());
    if (xhr.readyState === 4 && xhr.status === 200) { // 4 = xhr.DONE
      aff('The responseText = <b><font color="red">' + xhr.responseText + '</font></b>');
//        valueATransmettre =  xhr.responseText+1;
//}
    }
    if (parseInt(xhr.responseText) < 778) {
    }
    else {
    }
  };

  xhr.open('GET', 'ajoute_un.php?value=' + valueATransmettre, false); // Mode synchone
//    xhr.open('GET', 'ajoute_un.php?value=' + valueATransmettre, true); // Mode Asynchrone
  xhr.send(null);

  for (var i = 0; i < 1e6; i++) {
//    aff(i);
    if (i > 1990) {
      document.getElementById('myScreen').innerHTML = 'Calcul terminé.';
    }
  }

  function aff(output) {
    document.getElementById('aff_js').innerHTML += output + '<br>';
  }
})();