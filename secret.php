<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geheime Seite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Landing Page</a> |
            <a href="about.html">Über mich</a> |
            <a href="calc.html">Calculator</a> |
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <div class="container">
        <h1>Geheime Informationen</h1>
        <p>Willkommen auf der geheimen Seite!</p>
        <p>Die admin_login.txt war wohl nicht gut genug versteckt?!</p>
        <p>Vorgestellt habe ich mich bereits <a href="about.html">hier!</a> 
        <p>Deswegen geht es hier zu einem anderen <a href="secretcalculator.html">Geheimen Calculator</a></p>
        <img src="Genma.gif" alt="Panda">
    </div>

</body>
<footer>
    <p>&copy; 2024 Roy Faust | Alle Rechte vorbehalten</p>
    <p>Kontakt: <a href="1932175739@bildung.daa.de">Meine DAA-Mail</a> (Nur Intern erreichbar)</p>
</footer>
</html>
