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
  </head>
  <style>
    .blue{
      color:blue;
    }
    .red{
      color:red;
    }
  </style>
  <body><p>
      <?php
      $nb_add = 7;
      for ($i = 0; $i <= $nb_add; $i++) {
        echo '<div class=' . (($i % 4 == $i % 2) ? 'blue' : 'red') . '>' . $i . '</div>';
      }


      $req->execute(array((empty($_POST['nom']) ? '*' : $_POST['nom']), (empty($_POST['prenom']) ? '*' : $_POST['prenom']), (empty($_POST['etage']) ? '*' : $_POST['etage'])));
      ?>
    </p>
  </body>