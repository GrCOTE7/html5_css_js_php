<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div id="etude_chronologie">

      <section>
        html5
      </section>

      <section id='myScreen' class="red">
        <script>
          document.getElementById('myScreen').innerHTML = 'Je calcule...';
        </script>
      </section>

      <section id ="calcul">
        <ul>
          <?php
//          for ($index = 1; $index < 1e5; $index++) { //1e6
          for ($index = 1e5; $index < (1e5 + 1e2); $index++) { //1e6
            echo '<li>';
            echo number_format($index, 0, '.', ' ');
            echo ' ';
            echo '</li>';
          }
          ?>
        </ul>
      </section>

    </div>
    <script src="html_css_js_php.js"></script>
  </body>
</html>
