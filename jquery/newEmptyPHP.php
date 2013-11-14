<style type="text/css">
  #balle {
    width: 100px;
    height: 100px;
    background-color: red;
    border: black 2px solid;
    border-radius: 100px;
    position: relative;
  }
</style>

<div id="balle"></div>

<script src="jquery.js"></script>
<script>
  
  $(function() {
    function bis() {
      $('#balle').animate({left: '+=200'}, 10000)
                 .animate({top: '+=200'}, 10000)
                 .animate({left: '-=200'}, 1e4)
                 .animate({top: '-=200'}, 1e4, bis);
    };
    bis();
  });
</script>