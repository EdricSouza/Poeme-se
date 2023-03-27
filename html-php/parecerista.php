<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: login.php");
  exit;
}
?>

<html>
  <head>
    <title>Página protegida</title>
  </head>
  <body>
    <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Este é o conteúdo protegido da sua página.</p>
  </body>
</html>