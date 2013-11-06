<?php
//
$page_title = 'Objects / JS';
$param_c7 = array(0, 0, $page_title);
//
?>
<style>
  input{
    color:blue;
    border-radius: 5px;
  }
  input:hover{
    text-shadow: 0 0 10px red;
  }

  #progression{
    margin:3px 0;
    width:300px;
    height:30px;
    border:3px solid #222;
    border-radius: 7px;
  }
  #progression div{
    width:0;
    height:100%;
    background-color:orange;
    border-radius: 4px;
  }
  .retourAjax{
    color:purple;
  }
</style>
<div id='test_jq'><i>Go<b>7P</b> !</i></div>
<div id='aff_js'></div>
<div id='myText'></div>
<a href="#" id='myLink' style="display:none;"></a>

<p id="fileContent" class="retourAjax">
</p>

<script type="text/javascript" src="ajax_js_001.js"></script>

<!--<script type="text/javascript" src="array2.js"></script>-->
<!-- Appel comparaison calcul de l'heure dynamique -->

<script>

  (function() {
    var myNodal = document.getElementById('test_jq');
    myNodal.style.display = 'none';
    var myMsg = document.getElementById('aff_js');
    if (myMsg.innerHTML === '')
      myMsg.style.display = 'none';
  })();
</script>