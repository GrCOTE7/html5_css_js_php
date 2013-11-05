<?php
//
$page_title = 'Objects / JS';
$param_c7 = array(0, 0, $page_title);
include_once('../../../../../header_ca.php');
require_once '../../../header.php';
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
<!--<input type='text' id='myInput' value='' placeholder='votre_email@email.com' />-->
<div id='myText'></div>
<a href="#" id='myLink' style="display:none;"></a>

<p>
  Survolez le bouton du fichier pour voir le contenu :
</p>

<p><center>
  <input type="button" value="file1.txt" />
  <input type="button" value="file2.txt" />
  <input type="button" value="file3.php" />
</center></p>

<div id="progression">
  <div></div>
</div>

<p id="fileContent" class="retourAjax">
  <span>Aucun fichier chargé</span>
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
<?php
include_once '../../../footer.php';
footerC7($heurea);