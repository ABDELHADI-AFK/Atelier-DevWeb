<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contenu Privé</title>
    <link rel="icon" href="favicon-32x32.ico">
</head>
<body>
    <h1>Bonjour, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h1>
    <p><?php include('HomePage.php'); ?></p>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>