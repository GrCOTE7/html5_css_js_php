var i = 0;
maDiv0 = document.querySelector('#maDiv0');
maDiv0.style.display = 'block';
  var monTimer = setInterval(function () {
    if (i % 3 === 0) {
      maDiv0.innerHTML = i % 3;
      //        maDiv = document.querySelector('#maDiv' + i % 3 + 1);
      //        maDiv.innerHTMl = 'Passage ' + i;
      //        maDiv.style.display = 'block';
    }
    i++;
    if (i>30) clearInterval(monTimer);
  }, 2000);