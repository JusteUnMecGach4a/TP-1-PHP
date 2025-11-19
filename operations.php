<!DOCTYPE html>
<html>
<head>
    <title>Opérations</title>
    <meta charset="utf-8">
    <nav>
        <ul>
            <li><a href="bienvenue.php">Bienvenue</a></li>
            <li><a href="index.html">Accueil (Index)</a></li>
            <li><a href="operations.php">Opérations</a></li>
            <li><a href="tri.php">Tri</a></li>
            <li><a href="tva.php">TVA</a></li>
        </ul>
    </nav>
</head>
<body>

<?php
    // 1. Déclaration et initialisation des variables
    $a = 15;
    $b = 12;

    // 2. Affichage initial des variables
    echo "<p>a est égal à " . $a . " et b est égal à " . $b . "</p>";

    // --- Les Opérations Arithmétiques ---

    // 3. Addition (+)
    $addition = $a + $b;
    echo "<p>L'addition de a et b est égale à " . $addition . "</p>";

    // 4. Soustraction (-)
    $soustraction = $a - $b;
    echo "<p>La soustraction de a et b est égale à " . $soustraction . "</p>";

    // 5. Division (/)
    $division = $a / $b;
    echo "<p>La division de a par b est égale à " . $division . "</p>";

    // 6. Modulo (%) - Reste de la division entière
    $modulo = $a % $b;
    echo "<p>Le modulo de a par b est égal à " . $modulo . "</p>";

?>

</body>
</html>