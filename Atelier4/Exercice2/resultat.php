<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Résultats du test</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Résultats du test</h2>
    <?php
    if (isset($_GET['val1'], $_GET['val2'], $_GET['val3'])) {
        $val1 = $_GET['val1'];
        $val2 = $_GET['val2'];
        $val3 = $_GET['val3'];

        $min = min($val2, $val3);
        $max = max($val2, $val3);

        echo "$val1 est-il compris entre $min et $max ?<br>\n";

        if ($val1 >= $min && $val1 <= $max) {
            echo "Oui, $val1 est compris entre $min et $max";
        } else {
            echo "Non, $val1 n'est pas compris entre $min et $max";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
    ?>
</body>
</html>
