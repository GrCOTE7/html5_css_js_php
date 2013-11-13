<?php
$title = 'Event_JQuery';
include_once('./inc/head_li.php');

for ($index = 1; $index < 1e6; $index++) {

  $class = ($index % 3 == 0) ? 'red' : 'blue';

  echo '<div class=' . $class . '>' . $index . '</div>';
}
?>
<hr>
oOo



<!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>

<?php
include_once './inc/footer_li.php';
