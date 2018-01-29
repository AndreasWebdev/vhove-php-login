<?php
  // Funktion für das Überprüfen, ob man eingeloggt ist
  function checkLogin() {
    // Überprüft ob die Session "Wahr" ist
    if($_SESSION['laan_login'] == true) {
      // Gibt "Wahr" zurück
      return true;
    } else {
      // Gibt "Falsch" zurück
      return false;
    }
  }
?>
