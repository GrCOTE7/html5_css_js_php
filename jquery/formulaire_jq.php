<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mise en forme</title>
    <style type="text/css">
      #contenu
      {
        width: 500px;
        height: 400px;
        border: 1px black solid;
        float: left;
        margin-right: 10px;
        overflow-y: auto;
        text-align: justify;
        padding: 0 10px;
      }
      #controles
      {
        padding: 10px;
        width: 300px;
        height: 380px;
        border: 1px black solid;
        float: left;
      }
      #controles div{
        margin-bottom: 10px;
        padding: 5px;
      }
      label{
        float: left;
        width: 140px;
      }
      #image
      {
        width: 110px;
        /*height: 110px;*/
        margin: 10px auto;
      }
      p 
      { 
        padding-left: 5px; 
        padding-right: 5px; 
        font-family: 'Times New Roman';
      }
    </style>
  </head>
  <body>
    <div id="contenu">
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
      <div id="image"><img src="img/c7.png" alt='logo c7' width='100'></div>
      <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </p>
      <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. </p>
    </div>
    <div id="controles">
      <div>
        <label for="couleur-fond">Couleur de fond</label>
        <select id="couleur-fond">
          <option value="#FFFFFF">Blanc</option>
          <option value="#9FFEF1">Bleu</option>
          <option value="#9FFECE">Vert</option>
          <option value="#FAFE9F">Jaune</option>
        </select>
      </div>

      <div>
        <label for="texte">Texte</label>
        <select id="texte">
          <option value="Normal">Normal</option>
          <option value="Gras">Gras</option>
          <option value="Italique">Italique</option>
          <option value="Souligne">Souligné</option>
        </select>
      </div>

      <div>
        <label for="police">Police</label>
        <select id="police">
          <option value="Times New Roman">Times New Roman</option>
          <option value="Courier New">Courier New</option>
          <option value="Arial">Arial</option>
        </select>
      </div>

      <div>
        <label for="police-prem-phrase">Police 1e phrase</label>
        <select id="police-prem-phrase">
          <option value="Times New Roman">Times New Roman</option>
          <option value="Courier New">Courier New</option>
          <option value="Arial">Arial</option>
        </select>
      </div>

      <div>
        <label for="prem-car-phrases">Prem caract phrases</label>
        <select id="prem-car-phrases">
          <option value="Normal">Normal</option>
          <option value="Gras">Gras</option>
        </select>
      </div>

      <div>
        <label for="mot">Mot en rouge</label>
        <input type="text" id="mot" size="2">
        <button id="couleurMot">OK</button>
      </div>

      <div>
        <label for="bordure-images">Bordure images</label>
        <select id="bordure-images">
          <option value="Rien">Rien</option>
          <option value="Simple">Simple</option>
          <option value="Double">Double</option>
        </select>
      </div>

      <div>
        <button id="raz">RAZ formulaire</button>
      </div>
    </div>

    <script src="jquery.js"></script>
    <script>
      $(function() {
        // Couleur de fond
        $('#couleur-fond').change(function() {
          var cf = $('#couleur-fond option:selected').val();
          $('#contenu').css('background-color', cf);
        });

        // Texte
        $('#texte').change(function() {
          var te = $('#texte option:selected').val();
          if (te == 'Normal') {
            $('#contenu p').css('font-weight', 'normal');
            $('#contenu p').css('font-style', 'normal');
            $('#contenu p').css('text-decoration', 'none');
          }
          if (te == 'Gras')
            $('#contenu p').css('font-weight', 'bold');
          if (te == 'Italique')
            $('#contenu p').css('font-style', 'italic');
          if (te == 'Souligne')
            $('#contenu p').css('text-decoration', 'underline');
        });

        // Police
        $('#police').change(function() {
          var ff = '"' + $('#police option:selected').val() + '"';
          $('#contenu p').css('font-family', ff);
        });

        // Police 1e phrase
        $('#police-prem-phrase').change(function() {
          var ppp = $('#police-prem-phrase option:selected').val();
          $('#contenu p:first').css('font-family', ppp);
        });

        // Premier caractère des phrases
        $('#prem-car-phrases').change(function() {
          var pcp = $('#prem-car-phrases option:selected').val();

          if (pcp == 'Normal') {
            $('p').each(function() {
              var unPar = $(this).html();
              if (unPar.indexOf('<img') == -1)
                $(this).text($(this).text());
            });
          }

          if (pcp == 'Gras') {
            $('p').each(function() {
              var tableau = $(this).text().split('. ');
              if (tableau.length == 1) {
              }
              else {
                var tableau2 = $.map(tableau, function(el, ind) {
                  if (el[0] != null)
                    return '<b>' + (el[0]) + '</b>' + el.substring(1) + '. ';
                });
                $(this).html(tableau2.join(''));
              }
            });
          }
        });

        // Mot en rouge
        $('#couleurMot').click(function() {
          var mot = $('#mot').val();
          var tableau = $('p:first').text().split(' ');
          var tableau2 = $.map(tableau, function(el, ind) {
            if (ind + 1 == mot)
              return ('<font color="red">' + el + '</font>')
            else
              return(el);
          });
          $('p:first').html(tableau2.join(' '));
        });

        // Bordure des images
        $('#bordure-images').change(function() {
          var bi = $('#bordure-images option:selected').val();
          if (bi == 'Rien')
            $('img').css('border', '2px solid white');
          if (bi == 'Simple')
            $('img').css('border', '2px solid red');
          if (bi == 'Double')
            $('img').css('border', '5px double red');
        });

        // RAZ du formulaire
        $('#raz').click(function() {
          location.reload();
        });
      });
    </script> 
  </body>
</html>