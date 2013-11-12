$(function() {

//  $('.reponse').hide();


  var q = $('.question');          //Mémorisation du sélecteur dans une variable pour optimiser le code
  q.css('background', '#9EEAE0');  //Couleur d'arrière-plan
  q.css('border-style', 'groove'); //Type de la bordure
  q.css('border-width', '4px');    //Largeur de la bordure
  q.css('width', '95%');         //Largeur des balises <div> de classe « question »
  q.css('height', '200px');        //Hauteur des balises <div> de classe « question »
  q.css('margin', '15px auto');         //Marge autour des balises <div> de classe « question »
  q.css('padding', '10px');         //Marge autour des balises <div> de classe « question »
  q.css('border-radius', '10px');

  $('.texte').css('float', 'left');
  $('.texte').css('width', '90%');

  $('img').css('float', 'right');
  $('img').css('margin-right', '3px');
  $('img').css('margin-top', '70px');
  $('img').css('border-radius', '4px');

  $('h2').css('margin', '7px 0');
  $('h2').css('textTransform', 'capitalize');


  $('reponse').text(function(index, actuel) {
    $(':radio[id="r1"]:checked').val();
//    alert('Paragraphe ' + (index + 1) + ' : ' + actuel);
  });



  $('a').hover(
      function() { // Survol
        $('.reponse').css('color', 'red');
      },
      function() { // Pas survol
        $('.reponse').css('color', 'black');
      }
  );




});
