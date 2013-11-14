$(function() {

  Notifier.c7('Go !');
  var myJq = $('#myJq');

  myJq.html('Oki');

  var myLogo = $('#Animate_Jq img');
  myLogo.css('border', '1px solid red');
  myLogo.animate({borderWidth: '100'}, 1500)
      .animate({width: '-=10%', 'height': '-=10%'}, 1000)
      .animate({borderWidth: '2'}, 1500)
      .animate({marginTop: '300'}, 1500)
      .animate({borderWidth: '0'}, 1000)
      .animate({marginLeft: '380', 'margin-top': '0'}, 1500);


  var monTimer = setInterval(function() {
    myJq.html('Nombre d\'animations dans la file d\'attente : ' + myLogo.queue().length);
  }, 100);

  setTimeout(function() {
    clearInterval(monTimer);
  }, 15000);


});

