<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Affiche</title>
</head>
<body>
<?php
if(isset($_GET['jour']) && $_GET['jour']!=="" && isset($_GET['mois']) && $_GET['mois']!=="" && isset($_GET['annee']) && $_GET['annee']!=="") {
    $jour = $_GET['jour'];
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
    echo "La date choisie est le :<br>";
    echo "$jour/$mois/$annee <br>";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
</body>
</html>