var finished = false;

$.ajax({
  url: 'script.php',
  success: function(data) {
    finished = true;
  }
});

function status_listener() {

  $.ajax({
    url: 'status.php',
    success: function(data) {
      console.log(data);
      if (!finished) {
        status_listener();
      }
    }
  });

}

status_listener();