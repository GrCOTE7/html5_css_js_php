<?php
$title = 'Event_Deleguation_JQ';
include_once('./inc/head_li.php');
?>
<p style='text-align:justify;'>
  La délégation d'événements permet de cloner la gestion événementielle d'un élément à un ou plusieurs de ses enfants créés à la volée dans le code jQuery. Peu importe le nombre d'éléments créés : ils se comporteront tous (d'un point de vue événementiel) comme leur parent. Et ce, sans qu'aucun code supplémentaire ne soit écrit.</p>
<hr>
<button id="suppr">Supprimer la délégation d'événements</button><br /><br />
<div id="master" class='event'>
  <div class='event'>Cliquez pour insérer un autre &ltdiv&gt</div>
</div>
<!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="event_delegue.js"></script>

<?php
include_once './inc/footer_li.php';
