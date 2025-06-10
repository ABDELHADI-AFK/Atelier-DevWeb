<?php
if(isset($_GET['nom']) && $_GET['nom']!=="" && isset($_GET['prenom']) && $_GET['prenom']!=="" && isset($_GET['adresse']) && $_GET['adresse']!=="" && isset($_GET['ville']) && $_GET['ville']!=="" && isset($_GET['postal']) && $_GET['postal']!=="") {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $adresse = $_GET['adresse'];
    $ville = $_GET['ville'];
    $postal = $_GET['postal'];
    echo "<h2>Consultation de :</h2>
    <ul>
        <li><a href='etat_civil.php?prenom=$prenom&nom=$nom'>Votre état civil</a></li>
        <li><a href='fichier_adresse.php?adresse=$adresse&ville=$ville&postal=$postal'>Votre Adresse</a></li>
    </ul>";
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
