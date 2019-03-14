<?php
$error = ''; // Initialisierung

session_start(); // Session starten
session_regenerate_id();

// Session schon vorhanden?
if(isset($_SESSION['Auth']) && $_SESSION['Auth']==1){
  header('location: portal.php');
} else {

  // Benutzereingaben vorhanden?
  if(isset($_POST["frmUser"]) && isset($_POST["frmPass"])) {

    //Benutzereingaben speichern
    $frmUser=$_POST["frmUser"];
    $frmPass=$_POST["frmPass"];

    // Stimmen die Angaben des Benutzers?
    if((strtolower($frmUser)=="tester") && ($frmPass=="geheim")){
      $_SESSION["User"]=$frmUser;
      $_SESSION["Auth"]=1;

      // Weiterleitung auf portal.php
      header('Location: portal.php');

    // Fehlermeldung: Benutzereingaben stimmen nicht überein.
    } else {
      $error .= "Ihre Eingabe war falsch, melden Sie sich bitte auf der
      <a href=\"index.php\">Login-Seite</a> neu an<br / >";
    }
  // Fehlermeldung: wenn keine Eingabe gemacht wurde.
  } else {
    $error .= "Ihre Eingabe war falsch, melden Sie sich bitte auf der
    <a href=\"index.php\">Login-Seite</a> neu an<br / >";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prüfen der Benutzereingaben / Session erstellen </title>
  </head>
  <body>
    <h1>Fehlermeldung</h1>
    <?php
      echo $error; // Ausgabe der Fehlermeldung
    ?>
  </body>
</html>
