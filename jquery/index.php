<?php
$title = 'Animate_Jq';
include_once('./inc/head_li.php');
?>

<div id ='myJq'></div>



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
