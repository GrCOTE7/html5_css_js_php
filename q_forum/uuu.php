<?php
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'lol.html';
header("Location: http://$host$uri/$extra");
exit;
//    ob_start();
?>
<!DOCTYPE HTML>

<html>
  <head>
    <meta charset="utf-8" />
    <title>test</title>
  </head>
  <body>

  </body>
</html>