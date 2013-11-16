<?php
$title = 'Array_Jq';
include_once('./inc/head_li.php');

$array=[];
for ($index = 0; $index < 11; $index++) {
  array_push($array, $index);
}
unset($array[0]);

unset($array[7]);-+

var_dump($array);

?>
<hr>
<div id ='myJq'></div>
































  <!--<script src="jquery.js"></script>-->
<?php
include_once './inc_lib.php';
?>
<script src="jq_li.js"></script>

<?php
include_once './inc/footer_li.php';
