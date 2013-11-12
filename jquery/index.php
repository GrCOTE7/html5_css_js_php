<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <link rel="stylesheet" href="../sys/css/style.css">


    <style type="text/css">
      span{display: block;}
      .rouge { color: red; }
      .vert { color: green; 
      font-size:150%}
      .petit { font-size: 100%; }
      .grand {font-size: 250%; }
    </style>

  </head>

  <body>
    <span id='texteJQ'></span>



    <form>
      Nom d'utilisateur
      <input type="text" id="nom"><br />
 
      Mot de passe
      <input type="password" id="pass"><br />
 
      Sexe 
      H <input type="radio" id="sexe" name="H" value="H">
      F <input type="radio" id="sexe" name="F" value="F"><br />
 
      Fonction
      <select id="fonction">
        <option VALUE="etudiant">Etudiant</option>
        <option VALUE="ingenieur">Ingénieur</option>
        <option VALUE="enseignant">Enseignant</option>
        <option VALUE="retraite">Retraité</option>
        <option VALUE="autre">Autre</option>
      </select><br /><br />
 
      <input type="submit" id="envoyer" value="Envoyer">
      <input type="reset" id="annuler" value="Annuler">
    </form> 



    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="jq_li.js"></script>
  </body>
</html>