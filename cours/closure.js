var divs = document.getElementsByTagName('div'),
    divsLen = divs.length;

console.log(divsLen);

for (var i = 0; i < divsLen; i++) {
  
  (function(i) {
    setTimeout(function() {
      divs[i].style.display = 'block';
    }, 500 * i); // Le temps augmentera de 200ms à chaque élément
    
  })(i);
}