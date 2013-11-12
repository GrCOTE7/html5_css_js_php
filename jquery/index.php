<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>HTML JS PHP | Li</title>

    <link rel="shortcut icon" href="http://cote7.com/favicon.ico"/>
    <link rel="icon" type="image/x-icon"  href="http://cote7.com/favicon.ico"/>

    <link rel="stylesheet" href="../sys/css/style.css">


   <style type="text/css">
      #parent {
        width: 250px;
        height:250px;
        position: absolute;
        top: 100px;
        left: 50px;
        background-color: yellow;
      }
       
      #enfant {
        width: 100px;
        height:100px;
        position: absolute;
        top: 100px;
        left: 100px;
        background-color: red;
      }
    </style>

    
    
  </head>

  <body>
   
   <div id="parent">
      Texte dans le parent
      <div id="enfant">
        Texte dans l'enfant
      </div>
    </div>
    <span id="resultat"></span>    


    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="jq_li.js"></script>
  </body>
</html>