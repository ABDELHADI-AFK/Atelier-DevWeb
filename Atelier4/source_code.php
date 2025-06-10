<?php
$paths = [
    "1"    => ["Exercice1/formulaire1.php", "Exercice1/affiche.php"],
    "1bis" => ["Exercice1bis/formulaire2.php", "Exercice1bis/liens.php", "Exercice1bis/etat_civil.php", "Exercice1bis/fichier_adresse.php"],
    "2"    => ["Exercice2/nombres.php", "Exercice2/resultat.php"],
    "3"    => ["Exercice3/index.php"],
    "4"    => ["Exercice4/index.php"],
    "5"    => ["Exercice5/td3form.php", "Exercice5/td3affiche.php"],
    "6"    => ["Exercice6/td3form.php", "Exercice6/td3affiche.php"],
    "7"    => ["Exercice7/td3form.php", "Exercice7/td3affiche.php"],
];

if (isset($paths[$exo])) {
    foreach ($paths[$exo] as $file) {
        echo "=== $file ===\n";
        echo htmlspecialchars(file_get_contents($file));
        echo "\n\n";
    }
} else {
    echo "Aucun fichier trouvé pour cet exercice.";
}
?>