<?php

//header('Content-Type: text/plain; charset=iso-8859-1');
//for ($index = 0; $index < 1e7; $index++) {
//  
//}
//sleep(1);


//var_dump($_GET);
$get = filter_input_array(INPUT_GET);
$n=$get['value']+1;
echo utf8_decode($n);
