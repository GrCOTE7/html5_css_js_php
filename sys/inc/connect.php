<?php

$conf = array('host' => 'localuhost', 'database' => 'concrete5', 'login' => 'root', 'password' => '');
try {
  $bdd = new PDO('mysql:host=' . $conf['host'] . ';dbname=' . $conf['database'] . ';', $conf['login'], $conf['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
  );
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $bdd->exec('SET NAMES utf8');
} catch (PDOException $e) {
  $bdd = $conf['database'];
  $msg_err = ' à la Base de Données <b>' . $bdd . '</b>.';
  die('<span class="red">'.$e->getMessage() . ' pour la connection ' . $msg_err.'</span>');
}