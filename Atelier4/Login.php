<?php
session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header('Location: index.php');
    exit;}?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="LoginStyle.css">
    <link rel="icon" href="favicon-32x32.ico">
<head>
    <title>Login</title>
</head>
<body>
    <?php if (isset($_GET['error'])): ?>
        <p style="color: #f89a27;">Nom d'utilisateur ou mot de passe invalide!</p>
    <?php endif; ?>
    <form method="POST" action="authenticate.php">
        <label>Nom d'utilisateur:</label>
        <input type="text" name="username" autocomplete="off" required>
        <br>
        <br>
        <label>Mot de passe:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>