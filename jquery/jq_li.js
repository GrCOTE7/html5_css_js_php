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

output.html(number_format(62*62*62*62*62,2));

  output.css('padding', '10px');
  output.css('border-radius', '7px');
  output.css('color', 'yellow');



i=1;
  var monTimer = setInterval(function() {
    $('img').trigger('click');
//      $('#message').html(i);
//    c.html(c.html() + '<br>' + 'Le code : ' + ch);
    i++;
    if (i > 10)
      clearInterval(monTimer);
  }, 4000);
  $('img').click(function() {
    $('#message').text('L\'image a été cliquée. (' + i + ')').fadeIn(1000).fadeOut(3000);
  });
});
