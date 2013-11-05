//document.write('js');

var xhr = new XMLHttpRequest();

 xhr.onreadystatechange = function() {
   loadFile('ajoute_un.php');
    affp('State: ' + xhr.readyState + ' - Status: ' + xhr.statusText);
//    affp('State: ' + xhr2.readyState + ' - Status: ' + xhr2.statusText + '<br>Header: ' + xhr2.getAllResponseHeaders());
    if (xhr.readyState === 4 && xhr.status === 200) { // 4 = xhr.DONE
      aff('<hr><b>The responseText = <font color="red">' + xhr.responseText + '</font></b>');
//      var name=777;
      aff('<hr><b>Name = ' + name + 'oOo</b>');
    }
  };



document.getElementById('myScreen').innerHTML = 'Calcul Terminé.';

 function aff(result) {
        document.getElementById('aff_js').innerHTML += result+'<br>';
      }

