$(function() {

  Notifier.c7('Go !');

  $('.event').on('click', '.event', function() {
    $(this).after('<div class="event">Ce &lt;div&gt; a les mêmes caractéristiques que son parent</div>');
  });

//Pour supprimer la déléguation d'évènement'
  $('#suppr').on('click', function() {
    $('.event').off('click', '.event');
  });

});