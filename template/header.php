<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login Beispiel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header class="wrapper">
      laan
      <span class="secret">geheim</span>
    </header>

    <nav class="wrapper">
      <a href="index.php">Startseite</a>

      <?php
        if(checkLogin() == true) {
          echo '<a href="geheim.php">Geheime Seite</a>';
          echo '<a href="logout.php">Logout</a>';
        } else {
          echo '<a href="login.php">Login</a>';
        }
      ?>
    </nav>
