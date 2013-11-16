<span id="un"></span><br /><br />
<span id="deux"></span><br /><br />
<button id="copie1">Prénoms en majuscules</button>
<button id="copie2">Index et prénoms en minuscules</button>

<script src="jquery.js"></script>
<script>

  $(function() {
    chiffres = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    $('#un').html(chiffres.join(' - '));


    pairs = $.map(chiffres, function(el, ind) {
      return (( ( el%2 ) ? 'pair':'impair') );
    });
    $('#deux').text('Index et prénoms en minuscules : ' + pairs.join(', '));

  });
</script>