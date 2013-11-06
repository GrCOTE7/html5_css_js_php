<?php

$get = filter_input_array(INPUT_GET);
$n = $get['value'] + 1;
if ($n > 777) {
  $n = 'fini';
}
echo $n;
