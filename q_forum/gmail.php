<?php

include '../../confLi.php';
//exit;
// Ouverture de la connexion IMAP avec le serveur des Email et un petit "or die" en cas de problème...
$boite = imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX", "grcote7@gmail.com", $pass_m) or die("Connexion impossible : " . imap_last_error());


// Contrôle le nombre de messages présent dans la boîte mail
$MC = imap_check($boite);

// On commence à afficher nos messages (avec expediteur, date, sujet)...
echo "<ul>";
$result = imap_fetch_overview($boite, "1:{$MC->Nmsgs}", 0);
foreach ($result as $overview) {
  $overview->msgno; // Ici, on s'en fout, donc on l'affiche pas <img src="../../bundles/tinymce/vendor/tiny_mce/plugins/emotions/img/smile.png" title=":)" alt=":)">
//    $expediteur = utf8_decode( imap_utf8( $overview->from ) ); // Ici, on récupère et décode l'expediteur
  $expediteur = imap_utf8($overview->from); // Ici, on récupère et décode l'expediteur
  $date_mail = $overview->date; // Ici, on récupère la date du mail
//    $sujet = utf8_decode( imap_utf8( $overview->subject ) ); // Ici, on récupère et décode le sujet
  $sujet = utf8_decode($overview->subject); // Ici, on récupère et décode le sujet

  echo "<li>";
  echo "Sujet : " . $sujet . " - ";
  echo "De : " . $expediteur . " - ";
  echo "Le : " . $date_mail . " ";
  echo "</li><hr>";
}
echo "</ul>";


// On ferme la connexion IMAP
imap_close($boite);
