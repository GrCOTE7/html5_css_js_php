$(function() {

  Notifier.c7('Go !');
  var myJq = $('#myJq'), output = '';

//  myJq.html('Oki');


  for (i = 1; i < 11; i++) {
    output += '<span class="' + ((i % 2) ? 'blue' : 'red') + '">' + i + '</span> ';
  }






  output += '<hr>Boucle de base:<br>';
  for (i = 1; i < 11; i++) {
    output += '<span class="' + ((i % 2) ? 'blue' : 'red') + '">' + i + '</span> ';
  }
  myJq.html(output);

});

