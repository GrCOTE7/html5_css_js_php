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


//              $('#premier').fadeOut(4000);


//        $('#premier').animate({
//          color: 'red'
//        }, 5000);

        $('#majPremier').fadeTo(3000, 0);
        $('#premier').fadeTo(2000, 0).delay(3000);

        setTimeout(function() {
          $('#premier').load('maj1.html', function() {
            $('#premier').fadeTo(2000, 1).delay(3000);
            Notifier.success('Par AJAX', 'La première zone a été mise à jour');
          });
        }, 5000);
//        
//            .animate({
//              opacity: 0,
//              queue: true
//            }, 1000)
//            .animate({
//              height:'0px',
//              color:'red',
//              opacity: 1,
//              queue: true
//            }, 1000);

        $(function() {
          Notifier.c7('Clic sur un bouton ou le Logo !');
          $('#majPremier').click(function() {
            $('#majPremier').fadeOut(4000);
            setTimeout(function() {
              $('#premier').css('display', 'none');
              $('#premier').load('maj1.html', function() {
                Notifier.success('Par AJAX', 'La première zone a été mise à jour');
              });
            }, 5000);

          });
//          $('#majPremier').fadeOut(7000);
//          $('#majPremier').css('display', 'none');
//          

          //$('#exo img').attr('src', 'img/chat.jpg').fadeIn(3000);
          //$('#deuxiemeChat').attr('src', './img/c7.png');
          $('.deuxiemeImg').fadeIn(3000);


          //$('#exo img').delay(2000);
          //clic
          //        .delay(5000).fadeIn(2000);
          $('.deuxiemeImg').fadeOut(5000);
          $('.deuxiemeLogoC7').delay(4000).fadeIn(5000);

          var clickPossible = 1;

          //        $('#deuxiemeLogoC7').delay(2000).attr('src', 'img/c7.png').fadeIn(200);

          /*
           $('#majDeuxieme').click(function() {
           $('#deuxieme').load('maj2.html', function() {
           Notifier.success('Par AJAX', 'La deuxième zone est mise à jour');
           $('.deuxiemeImg').fadeIn(3000);
           $('#deuxiemeLogoC7').fadeOut(3000);
           setTimeout(function() {
           $('.deuxiemeImg').fadeOut(7000);
           $('#deuxiemeLogoC7').fadeIn(7000);
           }, 3000);
           setTimeout(function() {
           Notifier.success('( Juste en jQ )', 'La deuxième zone a été ré-initialisée');
           }, 5000);
           });
           });
           */
          var eventClicOnBytnOrChat = function() {
            $('#deuxieme').css('border', '4px solid red');
            if (clickPossible) {
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
                  Notifier.success('( Juste en jQ )', 'La deuxième zone a été ré-initialisée');
                  $('.deuxiemeLogoC7').click(eventClicOnBytnOrChat);
                  $('#majDeuxieme').click(eventClicOnBytnOrChat);
                  clickPossible = 1;
                  $('#deuxieme').css('border', '4px solid greenyellow');
                }, 5000);
              });
            }
            else {
              Notifier.error('Merci d\'attendre la fin de l\'affichage');
            }
            ;
          };
          $('#deuxieme').click(eventClicOnBytnOrChat);
          $('#majDeuxieme').click(eventClicOnBytnOrChat);

        });

      </script>
    </div>
  </body>
</html>