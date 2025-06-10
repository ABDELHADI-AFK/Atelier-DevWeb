<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Affiche</title>
</head>
<body>
<?php
if(isset($_GET['nom']) && $_GET['nom']!=="" && isset($_GET['prenom']) && $_GET['prenom']!=="" && isset($_GET['adresse']) && $_GET['adresse']!=="" && isset($_GET['ville']) && $_GET['ville']!=="" && isset($_GET['postal']) && $_GET['postal']!=="") {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $adresse = $_GET['adresse'];
    $ville = $_GET['ville'];
    $postal = $_GET['postal'];
    echo "Bienvenue $prenom $nom. <br> Nous Avons bien noté que vous habitez à <br> $adresse, $ville ($postal).";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
</body>
</html>