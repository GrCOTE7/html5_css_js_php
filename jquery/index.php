<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <link rel="stylesheet" href="../sys/css/style.css">


    <style>


      div { background: red;}

    </style>



  </head>

  <body>




    <span id="resultat"></span>

    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="jq_li.js"></script>


    Cliquez sur l'image<br />
    <img src="./img/chat.jpg" alt=' '><br />
    <span id='message'></span>

    <script>
      $(function() {
        $('img').one('click', function() {
          $('#message').html('Vous avez cliqué sur l\'image. Désormais, je resterai insensible aux clics.').fadeIn(2000).fadeOut(7000);
        });
      });
    </script>
  </body>
</html>