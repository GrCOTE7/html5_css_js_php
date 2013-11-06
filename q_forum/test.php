<div id="maDiv0" style="display:none;">
  <p>Div 1</p>
</div>
<div id="maDiv1" style="display:none;">
  <p>Div 2</p>
</div>
<div id="maDiv2" style="display:none;">
  <p>Div 3</p>
</div>
<script>
  var i = 0;
  while (i < 30) {
    setTimeout(function afficheDiv() {
      if (i % 3 === 0) {
        maDiv = document.querySelector('#maDiv' + i);
        maDiv.innerHTMl = 'Passage ' + i;
      }
      var id = "maDiv" + i;
//      var maDiv = document.getElementById(id);
      maDiv.style.display = 'block';
      i++;
    }, 2000);
  }
</script>
  <?php

