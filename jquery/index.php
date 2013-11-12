<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <link rel="stylesheet" href="../sys/css/style.css">

  </head>

  <body>
    <!--<span id='texteJQ'></span>-->

 <form>
      Nom d'utilisateur
      <input type="text" name="nom"><br />
 
      Mot de passe
      <input type="password" name="pass"><br />
 
      Sexe
      Homme <input type="radio" name="sexe" value="H">
      Femme <input type="radio" name="sexe" value="F"><br />
 
      Commentaires
      <textarea rows="3" name="commentaires">Tapez vos commentaires ici</textarea><br />
 
      <input type="image" src="img/chat.jpg"><br />
 
      <input type="submit" value="Envoyer">
      <input type="reset" value="Annuler">
    </form> 


    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="jq_li.js"></script>
  </body>
</html>