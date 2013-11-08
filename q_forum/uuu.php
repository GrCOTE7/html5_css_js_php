<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>

    <link rel="stylesheet" href="../sys/css/style.css">
     <style>
      div {
        /*display: none;*/
        margin: 5px;
      }
    </style>
  </head>

  <body>
    <span id="texteJQ" ></span>
    <button onclick="incrementer();">Cliquer pour incrémenter la variable p</button>
 <?php
    $p = 0;
    echo '<span id="nbre">' . $p . '</span>';
    ?>

    <div>Elément 0</div>
    <div>Elément 1</div>
    <div>Elément 2</div>
    <div>Elément 3</div>
    <div>Elément 4</div>
    <div>Elément 5</div>
    <div>Elément 6</div>
    <div>Elément 7</div>
    <div>Elément 8</div>
    <div>Elément 9</div>

   
    <script>
//      function incrementer() {
//        nbclick = document.getElementById('nbre');
//        nbclick.innerHTML = parseInt(nbclick.innerHTML) + 1;
//      }

//      $(function() {
//        $('#texteJQ').html('Hello world ! Ce texte est affiché par jQuery.');
//      });

      var divs = document.getElementsByTagName('div'),
          divsLen = divs.length;

      for (var i = 0; i < divsLen; i++) {

        setTimeout(function() {
          divs[i].style.display = 'block';
        }, 200 * i); // Le temps augmentera de 200 ms à chaque élément

      }
    </script>
  </body>
</html>