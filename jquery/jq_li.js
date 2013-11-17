$(function() {

  Notifier.c7('Go 21 ab !');
  var myJq = $('#myJq'), output = '';


  var monTab = [];
  for (i = 1; i < 11; i++) {
    monTab.push(i);
  }
  
  
  output = '<u>&nbsp;I / Mon tableau <b>d\'origine</b> :</u><br>' + monTab + '<hr>';


  var sortieTab = '';
  monTab.forEach(function(value) {
    sortieTab += '<span class="' + ((value % 2) ? 'blue' : 'red') + '">' + value + '</span> ';
  });
  output += '<u>II / Mon tableau <b>formaté final</b> :</u><br>' + sortieTab;





  output += '<hr><u>Boucle de base :</u><br>';
  for (i = 7; i < 101; i++) {
    output += '<span class="' + ((i % 2) ? 'blue' : 'red') + '">' + i + '</span> ';
  }
  myJq.css('display','none');
  myJq.html(output);
  myJq.fadeIn(10000);

});
