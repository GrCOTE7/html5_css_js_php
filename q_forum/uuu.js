var divs = document.getElementsByTagName('div'),
    rep = document.querySelector('#rep');
divsLen = divs.length;

console.log(divsLen);

for (var i = 0; i < divsLen; i++) {

  (function(i) {
    setTimeout(function() {
      divs[i].style.display = 'block';
    }, 500 * i); // Le temps augmentera de 200ms à chaque élément

  })(i);
}



var job = 'AGENT',
b = job.substring(0,2).toLowerCase()+job.substring(2);








rep.innerHTML = b;
rep.innerHTML+='<hr>';






