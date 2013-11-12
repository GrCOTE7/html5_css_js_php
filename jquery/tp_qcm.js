$(function() {

  // Dissimulation des réponses
  $('.reponse').hide();

  var q = $('.question');          //Mémorisation du sélecteur dans une variable pour optimiser le code
  q.css('background', '#9EEAE0');  //Couleur d'arrière-plan
  q.css('border-style', 'groove'); //Type de la bordure
  q.css('border-width', '4px');    //Largeur de la bordure
  q.css('width', '95%');         //Largeur des balises <div> de classe « question »
  q.css('height', '200px');        //Hauteur des balises <div> de classe « question »
  q.css('margin', '15px auto');         //Marge autour des balises <div> de classe « question »
  q.css('padding', '10px').css('border-radius', '10px');

  $('.texte').css('float', 'left');
  $('.texte').css('width', '90%');

  $('img').css('float', 'right');
  $('img').css('margin-right', '3px');
  $('img').css('margin-top', '70px');
  $('img').css('border-radius', '4px');

  $('h2').css('margin', '7px 0');
  $('h2').css('textTransform', 'capitalize');



//  $('a').html(bonnesRep);

  var bonnesRep = ['r1', 'r4', 'r8'];

  $('a').hover(
      function() {
        $('.reponse').show();

        $('h2').each(function(index) {

          if ($(':radio[id=' + bonnesRep[index] + ']:checked').val()) {
            $('#img' + (index + 1)).attr('src', './img/bon.png');
            $('#reponse' + (index + 1)).css('color', 'green');
          }
          else {
            $('#img' + (index + 1)).attr('src', './img/mauvais.png');
            $('#reponse' + (index + 1)).css('color', 'red');
          }
        });

      },
      function() {
        $('.reponse').hide();

        $('img').each(function() {
          $(this).attr('src', './img/question.png');
        });

      }
  );

});
