<?php

$get = filter_input_array(INPUT_GET);
$n = $get['value'] + 1;

if ($n > $get['fin']) {
  $n = 'fini';
}
echo $n;
