<?php
// Session starten
session_start();
session_regenerate_id();

// Session prüfen
if (!isset($_SESSION["Auth"]) || $_SESSION["Auth"]!=1){

  // weiterleiten auf login.php
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Session gestartet</title>
  </head>
  <body>
    <h1>Hallo <?php echo $_SESSION["User"]?>, Herzlich Willkommen im Portal!</h1>

     <a href = "logout.php">Logout</a><br />

      <?php
        echo "<h3>Der Inhalt deiner Session:</h3>";
        echo "<pre>";
        print_r($_SESSION); // DUMP $_SESSION
        echo "</pre>";
        echo "<h3>Weitere Informationen über die Session: </h3>";
        echo "Session Name: " . session_name() . "<br />"; // Ausgabe Session Name
        echo "Session ID: " . session_id() . "<br />"; // Ausgabe Session ID
        echo "Session Pfad : " . session_save_path() . "<br />"; // Pfad zu Session File
        echo "Session Cache: " . session_cache_expire() . "<br />"; // Session Cache in Minuten
      ?>
  </body>
</html>
