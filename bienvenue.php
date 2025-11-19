<!DOCTYPE html>

<html>
<head>
<title>Premier pas PHP</title>
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

<p> Déclaration du 1er bloc PHP</p>
<!-- Déclaration du 1er bloc PHP -->
<?php 
	// Affichage de chaînes de caractères bien sûr dans cet exemple une seule chaîne pouvait suffire
	echo "<p>Si vous voyez cette phrase", " félicitations", " l'installation de votre serveur s'est déroulée correctement.</p>";
?> 
<!-- fin du 1er bloc -->

<br>
<hr>
<p> Déclaration du 2ème bloc PHP</p>
<!-- Déclaration d'un 2ème bloc PHP en notation abrégée -->
<?
	// Attention encore une fois à l'utilisation des simples et doubles quotes
	echo "<p> Voici un ensemble d'exemples PHP</p>";
?>
<hr>
<p> Déclaration du 3ème bloc PHP</p>
<!-- Déclaration d'un 3ème bloc PHP -->
<?
	// La concaténation en PHP
	echo "Le point "."permet de réaliser une concaténation";
?>
<hr>
<p> Déclaration du 4ème bloc PHP</p>
<!-- Déclaration d'un 4ème bloc PHP-->

<?
	/* Déclaration des variables toujours précédée d'un $
	   Pas de typage nécessaire 
	   C'est l'interpréteur PHP qui définira le type de la variable en fonction  de la valeur affectée */
	$chaine1="Canova-Prévot";
	$chaine2="Léo";
	$chaine_complete = $chaine1 . " " . $chaine2;
	// Bien sûr on peut utiliser les 3 manières ci-dessus
	echo $chaine1," ",$chaine2; // plusieurs valeurs séparées de virgules
	echo $chaine_complete; //Une seule chaîne de caractères
	echo $chaine1." ".$chaine2; // avec l'opérateur point . de concaténation

?>

</body>

</html>
