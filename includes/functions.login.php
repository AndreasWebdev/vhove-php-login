<?php
  // Funktion zum einloggen
  function login($password) {
    // Überprüft ob das übergebene Passwort "glitzertutu" ist
    if($password == 'glitzertutu') {
      // Setzt Session auf "Wahr"
      $_SESSION['laan_login'] = true;

      // Gibt "Wahr" zurück
      return true;
    } else {
      // Gibt "Falsch" zurück
      return false;
    }
  }
?>
