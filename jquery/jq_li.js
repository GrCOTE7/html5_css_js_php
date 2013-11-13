$(function() {

Notifier.c7('Go');

  $('.event').on('click', '.event', function(){
    $(this).after('<div class="event">Ce &lt;div&gt; a les mêmes caractéristiques que son parent</div>');
  });






});