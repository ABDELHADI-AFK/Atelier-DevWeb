<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Formulaire 2</title>
</head>
<body>
	<form action="liens.php" method="get">
        <label>Prénom :</label>
	    <input type="text" name="prenom">
	    <br><br>
	    <label>Nom :</label>
	    <input type="text" name="nom">
	    <br><br>
	    <label>Adresse :</label>
	    <input type="text" name="adresse">
	    <br><br>
        <label>Ville :</label>
	    <input type="text" name="ville">
	    <br><br>
	    <label>Code Postal :</label>
	    <input type="number" name="postal">
	    <br><br>
	    <input type="submit" value="Envoyer"></input>
		<input type="reset" value="Réinitialiser"></input>
	</form>
</body>
</html>