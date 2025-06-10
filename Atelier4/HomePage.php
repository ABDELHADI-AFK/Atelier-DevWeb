<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Exercice Hub</title>
</head>
<header><div>
    <?php include('Menu.php'); ?>
</div></header>
<br>
<body>
    <?php
    $ExercicesValides = ['1', '1bis', '2', '3', '4', '5', '6', '7'];
    $exo = $_GET['exo'] ?? '1';
    if (!in_array($exo, $ExercicesValides)) {
        $exo = '1';}

    $view = $_GET['view'] ?? 'enonce';  
    echo "<h2>Énoncé Exo $exo</h2>";  
    if ($view === 'enonce') {
        echo "<div>";
        include('Enonce.php');
        echo "</div>";}

    echo "<p>";
    echo "<a href='?exo=$exo&view=demo'>Afficher Démo</a>   ";
    echo "<a href='?exo=$exo&view=code'>Afficher Code</a>";
    echo "</p>";

    if ($view === 'demo') {
        echo "<div><h3>Demo</h3>";
        include('Demo.php');
        echo "</div>";
    } elseif ($view === 'code') {
        echo "<div><h3>Code Source</h3><pre>";
        include('source_code.php');
        echo "</pre></div>";}?>
</body>
</html>