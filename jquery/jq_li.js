$(function() {

  Notifier.c7('Go !');

  $('button').first().before('<div id="myAff"></div>');
  var aff = $('#myAff');


  var imgs = document.querySelectorAll('#Event_JQuery img'), limg, result = '';
  $.each(imgs, function name(parameters) {
    limg = this.src.split("/");
    result += limg[limg.length - 1].split('.png');
  });


//  aff.html(result);


  $('tr:odd').css('background', 'yellow');
  $('td').css('width', '150px');
  $('td').css('text-align', 'center');
  jQuery.fx.speeds['super-slow'] = 3000;
  $('#affiche').click(function() {
    $('tr:odd').show('super-slow', function message() {
      Notifier.success('Les lignes paires sont maintenant affichées');
    });
  });
  $('#cache').click(function() {
    $('tr:odd').hide(1000);
  });



  $('#afficheImg').click(function(result) {
    $('img').first().show('super-slow', function showNextOne() {
      $(this).next('img').show('super-slow', showNextOne);

      limg = this.src.split("/");
      result = limg[limg.length - 1].split('.png');
      Notifier.success('Image ', result[0]);
    });
  });
  $('#cacheImg').click(function() {
    $('img').first().hide('slow', function hideNextOne() {
      $(this).next('img').hide('slow', hideNextOne);
    });
  });
});