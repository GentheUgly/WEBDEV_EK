<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Start Seite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- CSS-Datei im Hauptverzeichnis -->
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Start Seite</a> |
            <a href="about.html">Über mich</a> |
            <a href="calc.html">Calc</a>
        </nav>
        <!-- Login-Formular im Header -->
        <form method="POST" action="header_login.php" style="display: inline-block; margin-left: 20px;">
            <input type="text" name="username" placeholder="Benutzername" required style="margin-right: 5px;">
            <input type="password" name="password" placeholder="Passwort" required style="margin-right: 5px;">
            <button type="submit">Login</button>
        </form>
    </header>

    <div class="container">
        <h1>Willkommen auf meiner persönlichen Website!</h1>
        <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
        <p>Informatiker Winter 2024</p>
        <p>Name: [Ihr Vorname] [Ihr Nachname]</p>
        <p>Standort: [Ihr Standort]</p>

        <!-- Fehlermeldung anzeigen -->
        <?php if (isset($_GET['error'])) { echo "<p style='color:red;'>{$_GET['error']}</p>"; } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
