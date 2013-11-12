<h1><?php
  if (isset($_POST)) {
    $sanitizePOST = filter_input(INPUT_POST, 'nnn', FILTER_SANITIZE_ENCODED);
    echo 'Reçu: '.$sanitizePOST;
  } else {
    echo 'Error: Pas d\'envoi !';
  }
  ?>
</h1>