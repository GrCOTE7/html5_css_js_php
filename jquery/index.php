<?php
$title = 'Event_JQuery';
include_once('./inc/head_li.php');
?>


































for ($index = 1; $index < 1e2; $index++) {
  $class = ($index % 10 == 0) ? 'red' : 'blue';
  if ($index % 5 == 0) echo '<span class=' . $class . '> ' . $index . '</span>';
}
?>






































<!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>

<?php
include_once './inc/footer_li.php';
