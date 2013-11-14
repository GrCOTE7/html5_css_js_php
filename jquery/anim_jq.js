$(function() {

  Notifier.c7('Go !');


  $('body').css('display', 'none');
  $('body').delay(3000).fadeTo(2000, 0.5);
  $('body').fadeTo(1000, .1);
  $('body').fadeTo(5000, 1);

  $('#message').fadeIn('slow').delay(10000).fadeOut(3000);

  setTimeout(function() {
    $('span#message').remove();
  }, 25000);



  $('.stopAnim').click(function() {
    $.fx.off = true;
    Notifier.info('(anim_jq.js)', 'Animations DÉSACTIVÉES');
  });
  $('.execAnim').click(function() {
    $.fx.off = false;
    Notifier.info('(anim_jq.js)', 'Animations ACTIVÉES');
  });

//  jQuery.fx.off = false;

//  var myTest = jQuery.fx.off;
//  $('#myJq').html('XXX: ' + myTest + '<hr>');
});

