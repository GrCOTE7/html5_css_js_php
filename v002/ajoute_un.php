<?php

$get = filter_input_array(INPUT_GET);
$n = $get['value'] + 1;
if ($n > 1e3) {
  $n = 'fini';
}
echo $n;
