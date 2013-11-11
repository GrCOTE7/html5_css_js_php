<?php

session_start();
$_SESSION['status'] = 0;

foreach (range(1, 5) as $num) {

  sleep(rand(1, 2)); // Sleep 1 ou 2 seconde aléatoirement

  $_SESSION['status'] = "Status : " + $num;
  session_write_close(); // On donne la main a un autre script en fermant/ouvrant la session.
  session_start();
}

$_SESSION['status'] = 'Finished';
