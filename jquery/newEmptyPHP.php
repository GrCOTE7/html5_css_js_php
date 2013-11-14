<pre><p>Recherches et remplacements de textes

Il est parfois nécessaire de sélectionner le ou les éléments qui contiennent un mot ou un texte particulier. Pour cela, vous utiliserez le pseudo-sélecteur :contains. Par exemple, pour sélectionner toutes les balises < div > qui contiennent le mot « rouge », vous utiliserez le sélecteur suivant :

1$('div:contains("rouge")')
Vous pourriez par exemple modifier la couleur d'arrière-plan des < div > qui contiennent le mot « rouge » en utilisant cette instruction :

1$('div:contains("rouge")').css('background-color', 'red');
Il est également possible de remplacer un texte par un autre ou un élément par un autre en utilisant la méthode replaceWith(), dont voici la syntaxe :

1$('sel').replaceWith('contenu');
… où sel est un sélecteur jQuery et contenu une chaîne HTML, un élément du DOM ou un objet jQuery qui remplacera le ou les éléments sélectionnés. Regardez le code suivant, tout deviendra limpide.
</p></pre>
<script src="jquery.js"></script>
<script>
  $(function() {
  
  $('p:contains("rouge")').css('background-color', 'red');
  $('p:contains("rouge")').replaceWith('okkk');
  
  });
</script>