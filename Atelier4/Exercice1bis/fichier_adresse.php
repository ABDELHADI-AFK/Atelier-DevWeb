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

if(isset($_GET['adresse']) && $_GET['adresse']!=="" && isset($_GET['ville']) && $_GET['ville']!=="" && isset($_GET['postal']) && $_GET['postal']!=="") {
    $adresse = $_GET['adresse'];
    $ville = $_GET['ville'];
    $postal = $_GET['postal'];
    echo "Vous habitez: <br> $adresse <br> $postal ($ville).";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
</body>
</html>