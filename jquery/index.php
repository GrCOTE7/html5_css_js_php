<?php
$title = 'Anim_JQuery';
include_once('./inc/head_li.php');



?>





<!--<div id ='myJq'></div>-->

<span id="message"><mark> Ce texte sera affiché pendant deux secondes </mark></span>

<div id="myImg">
<img src="img/bon_rd.png" width="46" height="46" alt="bon_rd" />
</div>




<div id='myCpt'>

<?php
for ($index = 1; $index <= 1e2; $index+=3) {
  echo '<span class=' . ( ($index % 10) ? 'blue' : 'red' ) . '> ' . $index . '</span>';
}

?>
</div>
<hr>
<div class='stopAnim' id ='stopAnim'>Stop Anim</div>
<div class='execAnim' id = 'execAnim'>Exec Anim</div>


































  <!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>

<?php
include_once './inc/footer_li.php';
