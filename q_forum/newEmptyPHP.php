
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Annexe - Chapitre 2 - Exemple 3</title>

    <style>
      div {
        display: none;
        margin: 5px;
      }
    </style>
  </head>

  <body>

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

    <script type="text/javascript">

      var divs = document.getElementsByTagName('div'),
          divsLen = divs.length;

      for (var i = 0; i < divsLen; i++) {
        (function() {
             var currentI = i;
          setTimeout(function() {
            divs[currentI].style.display = 'block';
          }, 200 * i); // Le temps augmentera de 200ms à chaque élément
        })();
      }

    </script>

  </body>
</html>