<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Questionnaire interactif en jQuery</title>


    <style>
     
      
      
      
    </style>

  </head>

  <body>
    <form>
      <a href="">Tester les réponses</a>

      <div class="question">
        <div class="texte">
          <h2>question 1</h2>
          Le code jQuery s'exécute :<br>
          <input type="radio" id="r1" name="q1">Dans le navigateur<br>
          <input type="radio" id="r2" name="q1">Sur le serveur où est stocké le code<br>
          <input type="radio" id="r3" name="q1">Tantôt dans le navigateur, tantôt sur le serveur<br>
          <br><span class="reponse" id="reponse1">Le code jQuery n'est autre que du JavaScript. A ce titre, il s'exécute toujours sur les clients (ordinateurs, tablettes et téléphones) qui font référence à ce code via une page HTML. La bonne réponse est donc la première.</span>
        </div>  
        <img id="img1" src="./img/question.png" alt=' ' />
      </div>

      <div class="question">
        <div class="texte">
          <h2>question 2</h2>
          Lorsque l'on veut exécuter du code jQuery, attendre la disponibilité du DOM est :<br>
          <input type="radio" id="r4" name="q2">Vital<br>
          <input type="radio" id="r5" name="q2">Inutile<br>
          <input type="radio" id="r6" name="q2">Parfois important, parfois sans importance<br>
          <br><span class="reponse" id="reponse2">Il est impératif d'attendre la disponibilité du DOM avant d'exécuter du code jQuery. Sans quoi, ce code pourrait s'appliquer à un élément indisponible et provoquer un comportement inattendu, voire même un plantage du navigateur.</span>
        </div>
        <img id="img2" src="./img/question.png" alt=' ' />
      </div>

      <div class="question">
        <div class="texte">
          <h2>question 3</h2>
          Pour chaîner deux méthodes jQuery :<br>
          <input type="radio" id="r7" name="q3">Il faut les mettre l'une à la suite de l'autre en les séparant par une virgule<br>
          <input type="radio" id="r8" name="q3">Il faut les mettre l'une à la suite de l'autre en les séparant par un point décimal<br>
          <input type="radio" id="r9" name="q3">Il est impossible de chaîner deux méthodes jQuery<br>
          <br><span class="reponse" id="reponse3">L'exécution d'un sélecteur jQuery produit un objet jQuery sur lequel il est possible d'appliquer une méthode jQuery. Cette méthode produit elle-même un objet jQuery. Il est donc possible de lui appliquer une autre méthode en utilisant le caractère de liaison habituel : le point décimal.</span>
        </div>  
        <img id="img3" src="./img/question.png" alt=' ' />
      </div>
    </form>

    <script src="../sys/lib/jquery-2.0.3.min.js"></script>
    <script src="../sys/lib/notifier_c7.js"></script>
    <script src="../sys/lib/fct_li-0.0.1.js"></script>
    <script src="tp_qcm.js"></script>
  </body>
</html>