<!DOCTYPE html>
<html>
  <head>
    <title>Ajax jQ 001</title>
    <meta charset="UTF-8">
  </head>

  <body><style type="text/css">
      div.ajax { width: 400px; height: 150px; float: left; margin: 5px; }
      #premier { background-color: #F6E497; }
      /*#deuxiemeChat{display:none;}*/
      #troisieme { background-color: #CAF1EC; }
      #quatrieme { background-color: #F1DBCA; }
      img{display:none; }
    </style>
    <div id='exo'>
      <button id="majPremier">Mise à jour première zone</button>
      <button id="majDeuxieme">Mise à jour deuxième zone</button><br /><br />
      <div id="premier" class='ajax'>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <!--Chargée / Ajax.delay(5000)-->
      <div id="deuxiemeChat" class='ajax'><img src="img/chat.jpg" alt=" " /></div>

      <div id="troisieme" class='ajax'>
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>

      <div id="quatrieme" class='ajax'>
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
      </div>
    </div>
    <script src="jquery.js"></script>
    <!--<script src="../sys/lib/notifier_c7_ori.js"></script>-->
    <script src="../sys/lib/notifier_c7.js"></script>
    <script>
      $(function() {
        Notifier.info('Clic / Le chat');
        $('#majPremier').click(function() {
          $('#premier').load('maj1.html', function() {
            Notifier.success('Par AJAX', 'La première zone a été mise à jour');
          });
        });


        //    $('#exo img').attr('src', 'img/chat.jpg').fadeIn(3000);
//         $('#deuxiemeChat').attr('src', './img/c7.png');
//         $('#deuxiemeChat').fadeIn(3000);
        /*
         
         $('#exo img').delay(2000);
         //clic
         //        .delay(5000).fadeIn(2000);
         $('#exo img').fadeOut(5000);
         */

        $('#majDeuxieme').click(function() {
          $('#deuxiemeChat').load('maj2.html', function() {
            Notifier.success('Par AJAX', 'La deuxième zone a été mise à jour');
            setTimeout(function() {
              Notifier.success('( Juste en jQ )', 'La deuxième zone a été ré-initialisée');
            }, 3000);
          });
        });
      });
    </script>
  </body>
</html>