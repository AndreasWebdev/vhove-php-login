<?php
  // Funktion zum ausloggen
  function logout() {
    // Lösche Session
    session_destroy();

    // Gebe "Wahr" zurück
    return true;
  }
?>
