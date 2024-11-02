<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "admin";
    $password = "1234";

    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    if ($inputUsername === $username && $inputPassword === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUsername;
        header("Location: secret.php");
        exit();
    } else {
        $error = "Ungültiger Benutzername oder Passwort.";
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }
}
?>
