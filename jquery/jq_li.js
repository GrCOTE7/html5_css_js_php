$(function() {

  Notifier.c7('Go !');







  var file = './img/bon.png';

  var imgs = document.querySelectorAll('#Event_JQuery img');


  $('#Event_JQuery').html(imgs);



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
});

$(function() {
  $('#afficheImg').click(function() {
    $('img').first().show('slow', function showNextOne() {
      $(this).next('img').show('slow', showNextOne);
      Notifier.success('Image');
    });
  });
  $('#cacheImg').click(function() {
    $('img').first().hide('slow', function hideNextOne() {
      $(this).next('img').hide('slow', hideNextOne);
    });
  });


});