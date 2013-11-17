var i = 3;
maDiv0 = document.querySelector('#maDiv0');
var monTimer = setInterval(function() {
//  document.querySelector('#maDivLi').innerHTML = i + ' => maDiv' + ((i - 0) % 3);
  maDivPrec = document.querySelector('#maDiv' + ((i - 1) % 3));
  maDivPrec.style.display = 'none';
  maDiv = document.querySelector('#maDiv' + (i % 3));
  maDiv.style.display = 'block';
  i++;
  if (i > 6) {
    clearInterval(monTimer);
    maDiv.innerHTML = 'Fin.';
  }

}, 2000);