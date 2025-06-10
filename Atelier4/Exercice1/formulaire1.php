<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Formulaire 1</title>
</head>
<body>
	<form action="Affiche\affiche.php" method="get">
        <label for="prenom">Prénom :</label>
	    <input type="text" id="prenom" name="prenom">
	    <br><br>
	    <label for="nom">Nom :</label>
	    <input type="text" id="nom" name="nom">
	    <br><br>
	    <label for="adresse">Adresse :</label>
	    <input type="text" id="adresse" name="adresse">
	    <br><br>
        <label for="ville">Ville :</label>
	    <input type="text" id="ville" name="ville">
	    <br><br>
	    <label for="postal">Code Postal :</label>
	    <input type="text" id="postal" name="postal">
	    <br><br>
	    <input type="submit" value="Envoyer"></input>
		<input type="reset" value="Réinitialiser"></input>
	</form>
</body>
</html>