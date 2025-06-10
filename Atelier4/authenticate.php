<?php
session_start();

$username = trim($_POST['username']) ?? '';
$password = $_POST['password'] ?? '';

$credentials = file('users.txt', FILE_IGNORE_NEW_LINES);
$valid_credentials = [];
foreach ($credentials as $line) {
    list($user, $hash) = explode(':', $line);
    $valid_credentials[$user] = $hash;
}



if (isset($valid_credentials[$username]) && password_verify($password, $valid_credentials[$username])) {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header('Location: index.php');
} else {
    header('Location: 404.php?error=1');
}
exit;