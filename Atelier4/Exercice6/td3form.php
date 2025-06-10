<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Choix d’un loisir</title>
</head>
<body>

<?php

$loisirs = array("Sports", "Musique", "Jeux", "Voyages");
?>

<form action="td3affiche.php" method="post">
    <fieldset>
        <legend>Loisir favori</legend>
        <?php
        foreach ($loisirs as $loisir) {
            echo '<label>';
            echo '<input type="radio" name="loisir" value="'. $loisir .'";>' . $loisir;
            echo '</label><br>';
        }
        ?>
    </fieldset>
    <br>
    <input type="submit" value="Envoyer">
</form>

</body>
</html>
