<!DOCTYPE html>
<html>
<head>
    <title>tri</title>
    <meta charset="utf-8">
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Ajustement pour que l'affichage ressemble plus à l'image */
        table {
            width: 30%; /* Réduit la largeur pour un aspect similaire */
        }
        th, td {
            text-align: left; /* Aligne le texte des cellules à gauche */
            padding: 5px 10px;
        }
        .prix {
            text-align: right; /* Aligne les prix à droite */
        }
    </style>
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
    // Déclaration des produits et de leurs prix TTC
    $produits = [
        "Unité Centrale" => 599.00,
        "Moniteur" => 199.00,
        "Souris" => 20.99,
        "Disque Dur" => 129.00
    ];

    // Calcul du montant total
    $montant_total = array_sum($produits);

    // Recherche de l'objet le plus cher (la valeur maximale dans le tableau)
    $objet_le_plus_cher = max($produits);
?>

<table>
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Prix TTC</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // Affichage des lignes du tableau
            foreach ($produits as $designation => $prix_ttc) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($designation) . "</td>";
                // On affiche le prix en le formatant pour avoir 2 décimales et le symbole €
                echo "<td class='prix'>" . number_format($prix_ttc, 2, '.', ' ') . " €" . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<p>
    Montant total de vos achats : <strong><?php echo number_format($montant_total, 2, '.', ' '); ?></strong>
</p>
<p>
    Objet le plus cher de votre panier : <strong><?php echo number_format($objet_le_plus_cher, 0, '.', ' '); ?></strong>
</p>

</body>
</html>
