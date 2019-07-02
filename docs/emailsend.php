<?php
$empfaenger = "jesusistscheisse@gmail.com";
$betreff = "Die Mail-Funktion";
$from = "From: Vorname Nachname <jesusistscheisse@gmail.com>";
$text = "Hier lernt Ihr, wie man mit PHP Mails verschickt";
 
mail($empfaenger, $betreff, $text, $from);
?>