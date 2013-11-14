<span id="status">Cliquez sur un des éléments du formulaire</span><br /><br />
<form>
  <input type="text" id="zone1"><br />
  <input type="text" id="zone2"><br />
  <input type="text" id="zone3"><br />
  <textarea id="zone4"></textarea>
</form>    

<script src="jquery.js"></script>
<script>
  $(function() {
    var leFocus;  
    $('input, textarea').focus( function() { 
      leFocus = '#' + $(this).attr('id');        
      $(leFocus).css('background-color', '#afc');
    }); 
    $('input, textarea').blur( function() { 
      leFocus = '#' + $(this).attr('id');        
      $(leFocus).css('background-color', '#fff');
    }); 
  });
</script>