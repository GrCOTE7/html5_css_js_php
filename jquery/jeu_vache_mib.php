<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>jeu</title>
  <style type="text/css">
    #jeu{
      width: 600px;
      height: 400px;
      border: 2px black solid;
      background: url('img/fond.png');
    }
    #soucoupe{
      z-index: 200; 
      position: absolute; 
      top: 20px; 
      left: 70px;
    }
    #bon{
      z-index: 100; 
      position: absolute; 
      display: none;
    }
    #mauvais{
      z-index: 100; 
      position: absolute; 
      display: none;
    }
  </style>
</head>

<body>
  <div id="jeu">
    <img id="soucoupe" src="img/soucoupe.png">
    <img id="bon" src="img/vache.png">
    <img id="mauvais" src="img/mib.png">
  </div>
  Bon : <span id="info1">0</span> Mauvais : <span id="info2">0</span> Score : <span id="info3">0</span> 
  <audio preload="auto" id="musiqueFond" autoplay="autoplay" loop="loop"><source src="sons/BabyPleaseDontGo.mp3" type="audio/mp3"><source src="sons/Bad99byPleaseDontGo.ogg" type="audio/ogg"></audio>

  <script src="jquery.js"></script>
  <script>
    $(function() {
      var stopDetection = 0;
      $(document).keydown(function(e){
      if (e.which == 39) // Vers la droite
      {
        posX = parseInt($('#soucoupe').css('left'));
          if (posX < 470)
            $('#soucoupe').css('left', posX+30);
        }     
        if (e.which == 37) // Vers la gauche
        {
          posX = parseInt($('#soucoupe').css('left'));
          if (posX > 20)
            $('#soucoupe').css('left', posX-30);
        }     
        if (e.which == 40) // Vers le bas
        {
          posY = parseInt($('#soucoupe').css('top'));
          if (posY < 230)
            $('#soucoupe').css('top', posY+30);
        }     
        if (e.which == 38) // Vers le haut
        {
          posY = parseInt($('#soucoupe').css('top'));
          if (posY > 20)
            $('#soucoupe').css('top', posY-30);
        } 
        if (e.which == 36) // Vers le haut et la gauche
        {
          posX = parseInt($('#soucoupe').css('left'));
          posY = parseInt($('#soucoupe').css('top'));
          if ((posY > 20) && (posX > 20))
            $('#soucoupe').css('left', posX-30).css('top', posY-30);
        }     
        if (e.which == 33) // Vers le haut et la droite
        {
          posX = parseInt($('#soucoupe').css('left'));
          posY = parseInt($('#soucoupe').css('top'));
          if ((posY > 20) && (posX < 470))
            $('#soucoupe').css('left', posX+30).css('top', posY-30);
        }     
        if (e.which == 35) // Vers le bas et la gauche
        {
          posX = parseInt($('#soucoupe').css('left'));
          posY = parseInt($('#soucoupe').css('top'));
          if ((posX > 20) && (posY < 230))
            $('#soucoupe').css('left', posX-30).css('top', posY+30);
        }     
        if (e.which == 34) // Vers le bas et la droite
        {
          posX = parseInt($('#soucoupe').css('left'));
          posY = parseInt($('#soucoupe').css('top'));
          if ((posY < 230) && (posX < 470))
            $('#soucoupe').css('left', posX+30).css('top', posY+30);
        }     
      });

      function afficheElements()
      {
        stopDetection = 0;
        var elemX = Math.floor(Math.random()*500)+20;
        var elemY = Math.floor(Math.random()*300)+20;
        var elemType = Math.floor(Math.random()*2);
        if (elemType == 0)
        {
          $('#bon').css('top',elemY).css('left',elemX);
          $('#bon').show();
          $('#mauvais').css('display','none');
        }
        else
        {
          $('#mauvais').css('top',elemY).css('left',elemX);
          $('#mauvais').show();
          $('#bon').css('display','none');
        }
      }

      function collisions()
      {
        posX = parseInt($('#soucoupe').css('left'));
        posY = parseInt($('#soucoupe').css('top'));
        if ($('#bon').css('display') == 'none')
        {
          elemType = 'mauvais';
          elemX = parseInt($('#mauvais').css('left'));
          elemY = parseInt($('#mauvais').css('top'));
        }
        else         
        {
          elemType = 'bon';
          elemX = parseInt($('#bon').css('left'));
          elemY = parseInt($('#bon').css('top'));
        }
        if ((elemX>posX-20) && (elemX<(posX+125-50+20)) && (elemY>posY-20) && (elemY<(posY+177-116+20)) && (stopDetection == 0))
        {
          stopDetection = 1;
          if (elemType=='bon')
          {
            var nbBon = parseInt($('#info1').text())+1;
            $('#info1').text(nbBon);
            var score = parseInt($('#info3').text())+5;
            $('#info3').text(score);
            $('#bon').css('display', 'none');
          }
          else
          {
            var nbMauvais = parseInt($('#info2').text())+1;
            $('#info2').text(nbMauvais);
            var score = parseInt($('#info3').text())-5;
            $('#info3').text(score);
            $('#mauvais').css('display', 'none');
          }
        }                         
      }
       
      setInterval(afficheElements, 2000);
      setInterval(collisions, 200);
    });
  </script>
</body>
</html>