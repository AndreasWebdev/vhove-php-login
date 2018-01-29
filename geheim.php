<?php
  // Session starten
  session_start();
  error_reporting(E_ALL ^  E_NOTICE);

  // checkLogin.php Einbinden
  include('includes/functions.checkLogin.php');

  // Leite zu Login zurück, wenn nicht eingeloggt
  if(checkLogin() != true) {
    header('Location: login.php');
  }

  // Header einbinden
  include('template/header.php');
?>
  <div class="content wrapper">
    <h1>Geheime Seite</h1>
    <p>Diese Seite ist sehr geheim!</p>
    <video src="assets/img/hacker.mp4" autoplay loop height="150px"></video>
  </div>
<?php
  // Footer einbinden
  include('template/footer.php');
?>
