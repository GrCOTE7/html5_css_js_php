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