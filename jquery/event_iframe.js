$(function() {



//$('p:first').append('tatati');


  var i = 0, nbc = 0, ch = '';
  var output = $('#code');
  var car = [];
  var cod = [];
  var code = '';
  for (i = 0; i < 10; i++) {
    car[i] = i;
    cod[i] = i + 48;
  }
  for (i = 1; i <= 26; i++) {
    car[i + 9] = String.fromCharCode(i + 64);
    cod[i + 9] = i + 64;
    car[i + 35] = String.fromCharCode(i + 96);
    cod[i + 35] = i + 96;
  }

//ch=car[29];

//    ch=String.fromCharCode(97fromCharCode(65););


  

  /*
   for (a = 0; a < 62; a++) {
   for (b = 0; b < 62; b++) {
   for (c = 0; c < 62; c++) {
   for (d = 0; d < 62; d++) {
   for (e = 0; e < 62; e++) {
   ch = car[a + 10] + ' ' + car[b + 10];
   //      c.html(c.html() + ch + '<br>');
   nbc++;
   }
   }
   }
   }
   }
   
   output.html(number_format(nbc) + '<hr>' + output.html());
   */

  output.html(number_format(Math.pow(62, 5), 2));
  output.css('padding', '10px');
  output.css('border-radius', '7px');
  output.css('color', 'yellow');
  $('img').css('borderRadius', '10px');
  $('button').css('borderRadius', '4px');



  function page_cible() {
    var la_page = window.open("http://localhost/js_php/jquery/uuu.html");
  }

//  page_cible();


$('#page_cible').css('color','blue');

$('#page_cible').html('ot');
$('h4').html('ot21');


output.html($('h4').html());














  i = 1;
  var monTimer = setInterval(function() {
    $('img').trigger('click', 'par JQUERY');
//      $('#message').html(i);
//    c.html(c.html() + '<br>' + 'Le code : ' + ch);
    i++;
    if (i > 10)
      clearInterval(monTimer);
  }, 4000);
  $('img').click(function(event, texte) {
    texte =  ( (texte== undefined) ? 'par MOI' : texte );
    $('img').fadeOut(3000).fadeIn(1000);
    $('img').css('boxShadow', '3px 3px 3px #aaa');
    $('#message').text('L\'image a été cliquée '+texte+'. (' + i + ')').fadeIn(1000).fadeOut(3000);
  });
});