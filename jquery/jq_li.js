$(function() {

 

//$('p:first').append('tatati');



$('<p>Oki</p>').insertBefore($('p:first'));

$('p:first').clone().insertBefore($('p:last'));


});
