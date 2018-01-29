<?php
  // Session starten
  session_start();
  error_reporting(E_ALL ^  E_NOTICE);

  // checkLogin.php Einbinden
  include('includes/functions.checkLogin.php');

  // login.php einbinden
  include('includes/functions.login.php');

  // Leite zu Index zurück, wenn bereits eingeloggt
  if(checkLogin() == true) {
    header('Location: index.php');
  }

  // Header einbinden
  include('template/header.php');
?>
  <div class="content wrapper">
    <h1>Login</h1>

    <?php
      // Logge ein, wenn Formular abgeschickt
      if(isset($_POST['submit'])) {
        $password = $_POST['password'];

        if( login( $password ) == false ) {
          // Passwort war falsch
          echo '<div class="login-error">Passwort war falsch!</div>';
        } else {
          // Password war korrekt, weiterleiten
          header('Location: index.php');
        }
      }
    ?>
    <form action="" method="POST">
      <input type="password" name="password" placeholder="Passwort hier eingeben..." /><input type="submit" name="submit" value="Login" />
    </form>
  </div>
<?php
  // Footer einbinden
  include('template/footer.php');
?>
