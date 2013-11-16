<span id="un"></span><br /><br />
<span id="deux"></span><br /><br />
<button id="filtre1">Après le cinquième</button>
<button id="filtre2">Différent de Mathis, Hugo et Yanis</button>
<button id="filtre3">Avant le cinquième</button>


<script src="jquery.js"></script>
<script>
  $(function() {
    var tableau = ['Luca', 'Emma', 'Mathis', 'Jade', 'Léa', 'Enzo', 'Chloé', 'Nathan', 'Manon', 'Noah', 'Sarah ', 'Louis', 'Luna', 'Kylian', 'Clara', 'Ethan', 'Camille', 'Hugo', 'Lylou', 'Théo', 'Zoé', 'Yanis', 'Maélys'];
    var tableau2;
    $('#un').text('Données originales :'+"\n" + tableau.join(', '));
    $('#un').append('<hr>Données originales :<br>' +tableau);
    $('#filtre1').click(function() {
      tableau2 = $.grep(tableau, function(el, ind) {
        return (ind > 4);
      });
      $('#deux').text('Après le cinquième : ' + tableau2.join(', '));
    });
    $('#filtre2').click(function() {
      tableau2 = $.grep(tableau, function(el, ind) {
        return (el != 'Mathis' && el != 'Hugo' && el != 'Yanis');
      });
      $('#deux').text('Différent de Mathis, Hugo et Yanis : ' + tableau2.join(', '));
    });
    $('#filtre3').click(function() {
      tableau2 = $.grep(tableau, function(el, ind) {
        return (ind > 4);
      }, true);
      $('#deux').text('Avant le cinquième : ' + tableau2.join(', '));
    });
  });
</script>