$(function() {



//$('p:first').append('tatati');



  $('<p>Oki</p>').insertBefore($('p:first'));

  $('p:first').clone().insertBefore($('p:last'));


  $('p:even').mouseover(function() {

    $('p:odd').css('color', 'red');


  },
      function() {

        $('p:odd').css('color', 'blue');


      }
  );


});
