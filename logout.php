<?php
  // Session starten
  session_start();
  error_reporting(E_ALL ^  E_NOTICE);

  // logout.php Einbinden
  include('includes/functions.logout.php');

  // Logge aus
  logout();

  // Leite zurück zur Startseite
  header('Location: index.php');
?>
