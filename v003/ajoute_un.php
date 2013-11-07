<?php

$get = filter_input_array(INPUT_GET);
$n = $get['value'] + 1;

if ($n > $get['fin']) {
  $n = 'fini';
}

sleep(1);

echo $n;


for ($index = 0; $index < 1e6; $index++) {
}