$(function() {

  var posparent = $('#parent').offset();
  var posenfant = $('#enfant').offset();
  var text1 = 'Parent : x=' + posparent.left + ', y=' + posparent.top + ' Enfant : x=' + posenfant.left + ', y=' + posenfant.top;

  var posparent = $('#parent').position();
  var posenfant = $('#enfant').position();

  var text2 = ('Parent : x=' + posparent.left + ', y=' + posparent.top + ' Enfant : x=' + posenfant.left + ', y=' + posenfant.top);

  $('span').text(text1+'\n'+text2);


var posenfant = $('#enfant').offset();
posenfant.top = 150;
posenfant.left = 120;
$('#enfant').offset(posenfant);




});






