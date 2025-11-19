<!DOCTYPE html>
<html>
<head>
    <title>Calcul TVA</title>
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
    $prix_ttc_1 = 19.50;
    $taux_tva = 0.055;
    $prix_ttc_2 = 32.00;

    $prix_ht_1 = $prix_ttc_1 / (1 + $taux_tva);
    $prix_ht_2 = $prix_ttc_2 / (1 + $taux_tva);

    $prix_ht_formatte_1 = number_format($prix_ht_1, 2, ',', ' ');
    $prix_ht_formatte_2 = number_format($prix_ht_2, 2, ',', ' ');
?>

    <table>
        <thead>
            <tr>
                <th>Produit alimentaire</th>
                <th>Prix TTC</th>
                <th>TVA</th>
                <th>Prix HT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Aliment 1</td>
                <td><?php echo number_format($prix_ttc_1, 2, ',', ' '); ?> €</td>
                <td><?php echo $taux_tva * 100; ?>%</td>
                <td><?php echo $prix_ht_formatte_1; ?> €</td>
            </tr>
            
            <tr>
                <td>Aliment 2</td>
                <td><?php echo number_format($prix_ttc_2, 2, ',', ' '); ?> €</td>
                <td><?php echo $taux_tva * 100; ?>%</td>
                <td><?php echo $prix_ht_formatte_2; ?> €</td>
            </tr>
        </tbody>
    </table>

</body>
</html>