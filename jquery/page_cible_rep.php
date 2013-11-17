<style>
  .red{color:red;}
  .blue{color:blue;}
</style><h1><?php
  if (isset($_POST) && !empty($_POST)) {
    $sanitizePOST = filter_input(INPUT_POST, 'nnn', FILTER_SANITIZE_ENCODED);
    echo 'Reçu: ' . (!empty($sanitizePOST)?('<span class="blue">'.$sanitizePOST.'</span>'):'Vide !!!');
  } else {
    echo '<div class="red">Error: Pas d\'envoi !</div>';
  }
  ?>
</h1>