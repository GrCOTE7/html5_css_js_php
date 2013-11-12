$(function() {



//$('p:first').append('tatati');


  var i = 0, ch = '';
  var c = $('#code');
  var car = [];

  for (i = 0; i < 10; i++) {
    car[i] = i;
  }
  for (i = 1; i <= 26; i++) {
    car[i + 9] = String.fromCharCode(i + 64);
    car[i + 35] = String.fromCharCode(i + 96);
  }

//ch=car[29];

//    ch=String.fromCharCode(97fromCharCode(65););


  for (a = 0; a < 3; a++) {
    for (b = 0; b < 3; b++) {
      ch = car[a + 10] + ' ' + car[b + 10];
      c.html(c.html() + ch + '<br>');
    }
  }


  c.html(c.html() + ch + '<br>');




  c.css('padding', '10px');
  c.css('border-radius', '7px');
  c.css('color', 'yellow');




  var monTimer = setInterval(function() {
    $('img').trigger('click');
//      $('#message').html(i);
//    c.html(c.html() + '<br>' + 'Le code : ' + ch);
    i++;
    if (i > 1)
      clearInterval(monTimer);
  }, 2000);
  $('img').click(function() {
    $('#message').text('L\'image a été cliquée. (' + i + ')').fadeIn(100).fadeOut(1000);
  });
});
