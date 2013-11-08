var divs = document.getElementsByTagName('div'),
    divsLen = divs.length;

console.log(divsLen);

for (var i = 0; i < divsLen; i++) {
  (function() {
    var currentI = i;
    setTimeout(function() {
      divs[currentI].style.display = 'block';
    }, 200 * i); // Le temps augmentera de 200ms à chaque élément
  })();
}