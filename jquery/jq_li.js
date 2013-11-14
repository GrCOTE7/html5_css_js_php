$(function() {

  Notifier.c7('Go !');
  var myJq = $('#myJq');

  myJq.html('Oki');

  var myLogo = $('#Animate_Jq img');
  myLogo.css('border', '1px solid red');
  myLogo.animate({'border-width': '100'}, 1500)
      .animate({'width': '-=10%', 'height': '-=10%'}, 1000)
      .animate({'border-width': '2'}, 1500)
      .animate({'margin-top': '300'}, 1500)
      .animate({'border-width': '0'}, 1000)
      .animate({'margin-left': '380', 'margin-top': '0'}, 1500);


  var monTimer = setInterval(function() {
    var n = $('#Animate_Jq img').queue();
    myJq.html('Nombre d\'animations dans la file d\'attente : ' + n.length);
  }, 100);

  setTimeout(function() {
    clearInterval(monTimer);
  },15000);


});

