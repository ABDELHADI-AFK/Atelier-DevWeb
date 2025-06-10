<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Loisir sélectionné</title>
</head>
<body>

<?php
if (isset($_POST['loisir'])) {
    $loisirChoisi = ($_POST['loisir']);
    echo "Vos loisirs favoris sont :".implode("-",$loisirChoisi);
} else {
    echo "Aucun loisir sélectionné.";
}
?>

</body>
</html>
