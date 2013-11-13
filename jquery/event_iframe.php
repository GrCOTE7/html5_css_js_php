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
<iframe id="page_cible" name="frame" src="http://boosteur.com" style="height: 100px; width: 95%; border:1x solid red; margin: 0 auto;">
</iframe>

<div><br /></div>

<?php

$i = 0;
do {
  echo $i . ' ';
} while ($i++ < 100);
echo '<hr>Fini';
?>


















<?php

include_once './inc_lib.php';
?>
<script src="event_iframe.js"></script>
<?php

include_once './inc/footer_li.php';
