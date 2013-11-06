(function() {

  var deb = document.getElementById('html'),
      rep = document.getElementById('myScreen'),
      progressBar = document.getElementById('maBar'),
      valeur = 0;

  deb.style.fontSize = '25px';
  rep.innerHTML = 'Calcul en Cours...';


  monTimer = setTimeout(function() {

    while (!isNaN(valeur)) {
      progressBar.value = (valeur * 100 / 1e4);
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
      url: "./jquery_ajax/ajoute_un.php",
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


  function number_format(nbr, decimals, dec_point, thousands_sep) {
// http://kevin.vanzonneveld.net
// +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

// Strip all characters but numerical ones.
    nbr = (nbr + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+nbr) ? 0 : +nbr,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ' ' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
          var k = Math.pow(10, prec);
          return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
  }

}
)();
 