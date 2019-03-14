<?php
// Session starten
session_start();
session_regenerate_id();

// Session leeren
$_SESSION = array();

// Cookie löschen
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
        $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Session löschen
session_destroy();

// Weiterleitung auf anmeldung
header('Location: index.php');

?>
