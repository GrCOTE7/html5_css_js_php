<button id="affiche">Faire apparaître les lignes paires</button>
<button id="cache">Faire disparaître les lignes paires</button><br />
<table border>
  <tr><td>1</td><td>a</td><td>b</td><td>c</td></tr>
  <tr><td>2</td><td>d</td><td>e</td><td>f</td></tr>
  <tr><td>3</td><td>g</td><td>h</td><td>i</td></tr>
  <tr><td>4</td><td>j</td><td>k</td><td>l</td></tr>
  <tr><td>5</td><td>m</td><td>n</td><td>o</td></tr>
</table>


<button id="afficheImg">Faire apparaître les images</button>
<button id="cacheImg">Faire disparaître les images</button><br />
<img src="./img/bon.png" alt=' '>
<img src="./img/mauvais.png" alt=' '>
<img src="./img/question.png" alt=' '>
<img src="./img/bon_rd.png" alt=' '>
<img src="./img/mauvais_rd.png" alt=' '>
<img src="./img/question_rd.png" alt=' '>
<script src="jquery.js"></script>

  














<script src="jquery.js"></script>
<script src="../sys/lib/notifier_c7.js"></script>
<script>
  $(function() {
    $('tr:odd').css('background', 'yellow');
    $('td').css('width', '150px');
    $('td').css('text-align', 'center');
    jQuery.fx.speeds['super-slow'] = 3000;
    $('#affiche').click(function() {
      $('tr:odd').show('super-slow', function message() {
        Notifier.success('Les lignes paires sont maintenant affichées');
      });
    });
    $('#cache').click(function() {
      $('tr:odd').hide(1000);
    });
  });
  
  $(function() {
    $('#afficheImg').click(function() {
      $('img').first().show('slow', function showNextOne() {
        $(this).next('img').show('slow', showNextOne);
      });    
    });
    $('#cacheImg').click(function() {
      $('img').first().hide('slow', function hideNextOne() {
        $(this).next('img').hide('slow', hideNextOne);
      });    
    });
  });
</script>