<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geheime Seite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Start Seite</a> |
            <a href="about.html">Über mich</a> |
            <a href="login.php">Login</a> |
            <a href="calc.html">Calc</a> |
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">
        <h1>Geheime Informationen</h1>
        <p>Vollständiger Name: [Ihr Name]</p>
        <p>Adresse: [Ihre Adresse]</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>