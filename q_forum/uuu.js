var divs = document.getElementsByTagName('div'),
    divsLen = divs.length;

for (var i = 0; i < divsLen; i++) {

  setTimeout(function() {
    divs[i].style.display = 'block';
  }, 200 * i); // Le temps augmentera de 200 ms à chaque élément

}