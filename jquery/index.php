<?php
$title = 'Event_JQuery';
include_once('./inc/head_li.php');
?>

































<?php
for ($index = 1; $index <= 1e2; $index+=3) {
  echo '<span class=' . ( ($index % 10) ? 'blue' : 'red' ) . '> ' . $index . '</span>';
}
?>






































  <!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>

<?php
include_once './inc/footer_li.php';
