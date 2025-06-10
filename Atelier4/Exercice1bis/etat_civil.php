<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>État Civil</title>
</head>
<body>
<?php
if(isset($_GET['nom']) && $_GET['nom']!=="" && isset($_GET['prenom']) && $_GET['prenom']!=="") {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    echo "Prénom : $prenom <br> Nom : $nom";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
</body>
</html>