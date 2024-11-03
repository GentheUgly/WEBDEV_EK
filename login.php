<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Landing Page</a> |
            <a href="about.html">Über mich</a> |
            <a href="calc.html">Calculator</a> |
            <a href="login.php">Login</a>
        </nav>
    </header>

    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="login_process.php">
            <label>Benutzername:</label>
            <input type="text" name="username" placeholder="Benutzername"><br><br>
            <label>Passwort:</label>
            <input type="password" name="password" placeholder="Passwort"><br><br>
            <button type="submit">Einloggen</button>
        </form>
        
        <?php if (isset($_GET['error'])) { echo "<p style='color:red;'>{$_GET['error']}</p>"; } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
