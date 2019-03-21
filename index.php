<?php

// Session starten git test
session_start();
session_regenerate_id();

// Session schon vorhanden?
if(isset($_SESSION['Auth']) && $_SESSION['Auth']==1){
  header('location: portal.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Anmelden</title>
  </head>
  <body>
    <h1>Anmelden</h1>
    <form action="login_server.php" method="post">
      Benutzer: <input name="frmUser" type="text"><br>
      Kennwort: <input name="frmPass" type="text"><br>
      <input name="Login" type="submit"><br>
    </form>
  </body>
</html>
