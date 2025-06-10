<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Loisir sélectionné</title>
</head>
<body>

<?php
if (isset($_POST['loisir'])) {
    $loisirChoisi = htmlspecialchars($_POST['loisir']);
    echo "Votre loisir favori est : $loisirChoisi";
} else {
    echo "Aucun loisir sélectionné.";
}
?>

</body>
</html>