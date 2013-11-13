<?php

$title = 'HTML_JQuery';
include_once('./inc/head_li.php');
?>



<span id="resultat"></span>

Cliquez sur l'image<br />
<img src="./img/chat.jpg" alt=' '><br />
<button>Cliquez ici</button>
<span id='message'></span>
<div id='code'></div>



<h4>Page Cible :</h4>
<iframe id="page_cible" name="frame" src="http://localhost/js_php/jquery/page_cible.html" style="height: 100px; width: 95%; border:1x solid red; margin: 0 auto;">
</iframe>

<div><br /></div>

<?php

for ($index = 0; $index < 10; $index++) {
  echo $index;
}
?>



















<?php

include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>
<?php

include_once './inc/footer_li.php';
