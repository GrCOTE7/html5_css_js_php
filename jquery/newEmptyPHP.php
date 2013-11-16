<style type="text/css">
  div.ajax { width: 400px; height: 150px; float: left; margin: 5px; }
  #premier { background-color: #F6E497; }
  #troisieme { background-color: #CAF1EC; }
  #quatrieme { background-color: #F1DBCA; }
</style>

<button id="majPremier">Mise à jour première zone</button>
<button id="majDeuxieme">Mise à jour deuxième zone</button><br /><br />
<div id="premier" class='ajax'>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>

<div id="deuxieme" class='ajax'>
  <img src="img/c7.png">
</div>

<div id="troisieme" class='ajax'>
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<div id="quatrieme" class='ajax'>
  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
</div>

<script src="jquery.js"></script>
<!--<script src="../sys/lib/notifier_c7_ori.js"></script>-->
<script src="../sys/lib/notifier_c7.js"></script>
<script>
  $(function() {
    Notifier.c7('MAJ notifier.c7');
    $('#majPremier').click(function() {
      $('#premier').load('maj1.html', function() {
        Notifier.success('La première zone a été mise à jour');
      });
    });

    $('#majDeuxieme').click(function() {
      $('#deuxieme').load('maj2.html', function() {
        Notifier.success('La deuxième zone a été mise à jour');
      });
    });
  });
</script>