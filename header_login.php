<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "1234";

    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    if ($inputUsername == $username && $inputPassword == $password) {
        // Erfolgreiche Anmeldung: Session setzen
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUsername;
        header("Location: index.php"); // Zurück zur Startseite
        exit();
    } else {
        // Fehlgeschlagene Anmeldung: Fehlermeldung zurück zur Startseite
        $error = "Ungültiger Benutzername oder Passwort.";
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }
}
?>