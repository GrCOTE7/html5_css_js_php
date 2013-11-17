<!DOCTYPE html>
<html>
  <head>
    <title>Ajax jQ 001</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uuu.css">
    <style>

    </style>

  </head>


  <body>

    <div id='exo'>
      <div id='lionel'></div>

      <section id='fondu'>

        <div id='nb0' class='theNb'>0</div>
        <div id='nb1' class='theNb'>1</div>
        <div id='nb2' class='theNb'>2</div>
        <div id='nb3' class='theNb'>3</div>
        <div id='nb4' class='theNb'>4</div>
        <div id='nb5' class='theNb'>5</div>
        <div id='nb6' class='theNb'>6</div>
        <div id='nb7' class='theNb'>7</div>
        <div id='nb8' class='theNb'>8</div>
        <div id='nb9' class='theNb'>9</div>

      </section>

      <section id='buttons'>

        <button id="majPremier">Mise à jour première zone</button>
        <button id="majDeuxieme" class='Ok'>Mise à jour deuxième zone</button>

      </section>

      <section id='lesDiv'>

        <div id="premier" class='ajax'>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>


        <!--Chargée / Ajax.delay(5000)-->
        <div id='deuxieme' class='ajax'>
          <img  class="deuxiemeImg" src="img/chat.jpg" width="150" height="150" alt="chat"/>
          <img  class="deuxiemeLogoC7" src="img/c7.png" alt="Logo C7"/>
        </div>


        <div id="troisieme" class='ajax'>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>


        <div id="quatrieme" class='ajax'>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
        </div>

      </section>

      <script src="jquery.js"></script>
      <script src="../sys/lib/notifier_c7.js"></script>


      <script>


        $(function() {


          $('#premier').fadeTo(1000, 0).delay(1000);
          $('#premier').fadeTo(1000, 1).delay(1000);
          $('#premier').fadeTo(1000, 0).delay(1000);
          $('#premier').fadeTo(1000, 1).delay(1000);
          
          
          clickPossible = 0;

          var i = 0;
//          affiche(i);

          function affiche(i) {
//        while (i < 10) {

            var monTimer = setInterval(function() {

              $('#nb' + i).fadeOut(700);
              $('#nb' + (i + 1)).fadeIn(700);
              i++;
              if (i > 8) {
                clearInterval(monTimer);
                $('#nb9').fadeOut(2000);

              }
            }, 1000);
          }




          Notifier.c7('Clic sur un bouton ou le Logo !');
          $('#majPremier').click(function() {

            $('#majPremier').fadeTo(2000, 0);
            $('#premier').fadeTo(2000, 0);

            setTimeout(function() {
              $('#premier').css('display', 'none');
              $('#premier').load('maj1.html', function() {
                Notifier.success('Par AJAX', 'La première zone a été mise à jour');
              });
            }, 5000);
          });

          $('.deuxiemeImg').fadeIn(3000);
          $('.deuxiemeImg').fadeOut(5000);
          $('.deuxiemeLogoC7').delay(4000).fadeIn(5000);

          clickPossible = 1;

          $('#majDeuxieme').addClass('Ok').removeClass('notOk');
          var eventClicOnBytnOrChat = function() {
            $('#deuxieme').css('border', '4px solid red');
            if (clickPossible == 1) {
              $('#majDeuxieme').addClass('notOk').removeClass('Ok');
              $('div.ajax:nth-of-type(2)').css('border-radius', '70px')
                  .css('backgroundColor', '#000');

              clickPossible = 0;
              $('#deuxieme').load('maj2.html', function() {
                Notifier.success('Par AJAX', 'La deuxième zone est mise à jour');
                $('.deuxiemeImg').fadeIn(3000);
                $('.deuxiemeLogoC7').fadeOut(3000);
                setTimeout(function() {
                  $('.deuxiemeImg').fadeOut(3000);
                  $('.deuxiemeLogoC7').fadeIn(3000);
                }, 3000);
                setTimeout(function() {
                  Notifier.success('( Juste en jQ ) - Clic à nouveau possible...', 'La deuxième zone a été ré-initialisée');
                  $('#deuxieme').css('border', '4px solid greenyellow');
                  clickPossible = 1;
                  $('#majDeuxieme').addClass('Ok').removeClass('notOk');

                  $('div.ajax:nth-of-type(2)').css('border-radius', '14px')
                      .css('backgroundColor', 'cornsilk');

                }, 5000);
              });
            }
            else {
              Notifier.error('Merci d\'attendre la fin de l\'affichage');
            }
          };
          $('#deuxieme').click(eventClicOnBytnOrChat);
          $('#majDeuxieme').click(eventClicOnBytnOrChat);
        });

      </script>
    </div>
  </body>
</html>