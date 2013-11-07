<?php

$get = filter_input_array(INPUT_GET);
$n = $get['value'] + 1;

if ($n > $get['fin']) {
  $n = 'fini';
}

sleep(0.01);

echo $n;
