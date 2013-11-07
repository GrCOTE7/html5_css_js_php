<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>

    <link rel="stylesheet" href="../sys/css/style.css">
    <?php include '../sys/inc/connect.php'; ?>

  </head>

  <body>

    <div id="content">
      <ul>
        <?php
        $criteres = array(
          'id_min' => 1,
          'id_max' =>3
        );

        $req = $bdd->prepare('select * from aa_test_langages where id > :id_min and id <= :id_max');
        
//        Si vient d'un formulaire:        
//        $req->bindValue('id', $_POST['id'], PDO::PARAM_INT);
//        $req->execute() or die(print_r($req->errorInfo(), true));

        $req->execute($criteres) or die(print_r($req->errorInfo(), true));
        
        while ($data = $req->fetch(PDO::FETCH_OBJ)):

          echo '<li id="<?php echo $data->id; ?>">';

          echo '<a href = "#<?php echo strtolower($data->nom); ?>">';
          echo $data->id . ' / ' . $data->nom;
          echo '</a>';

          echo '</li>';

        endwhile;
        ?>
      </ul>
    </div>

<!--<script src="main.js"></script>-->
  </body>
</html>
