<?php
// Variables pour le calcul d'IMC
$nom_personne = "Julien PECHBERTY";
$poids = 65; // en kg
$taille = 1.74; // en mètres

// Calcul de l'IMC
$imc = $poids / ($taille * $taille);

// Formatage de l'IMC à 2 décimales
$imc_formate = number_format($imc, 2);

// Détermination du statut selon l'IMC
$statut_imc = "";
$status_class = "";
if ($imc < 25) {
    $status_class = "imc-valeur-under";
    $statut_imc = "L'IMC est inférieur à 25 (poids normal).";
} elseif ($imc == 25) {
    $status_class = "imc-valeur-ok";
    $statut_imc = "L'IMC est exactement égal à 25 (limite supérieure normale).";
} else {
    $status_class = "imc-valeur-over";
    $statut_imc = "L'IMC est supérieur à 25 (surpoids).";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur IMC - <?php echo $nom_personne; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .donnees {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        .resultat {
            background: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }
        .imc-valeur-under {
            font-size: 36px;
            font-weight: bold;
            color: #ffd700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .imc-valeur-ok {
            font-size: 36px;
            font-weight: bold;
            color: lawngreen;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .imc-valeur-over {
            font-size: 36px;
            font-weight: bold;
            color: red;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .info {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>🧮 Calculateur d'IMC</h1>

    <div class="donnees">
        <h2>📊 Données personnelles</h2>
        <div class="info"><strong>Nom :</strong> <?php echo $nom_personne; ?></div>
        <div class="info"><strong>Poids :</strong> <?php echo $poids; ?> kg</div>
        <div class="info"><strong>Taille :</strong> <?php echo $taille; ?> m</div>
    </div>

    <div class="resultat">
        <h2>📈 Résultat du calcul</h2>
        <div id="imc" class="<?php echo $status_class ?>"><?php echo $imc_formate; ?></div>
        <p><strong>IMC (Indice de Masse Corporelle)</strong></p>
        <p><?php echo $statut_imc; ?></p>
    </div>

    <div class="donnees">
        <h3>ℹ️ Informations complémentaires</h3>
        <p><strong>Calcul effectué :</strong> <?php echo $poids; ?> ÷ (<?php echo $taille; ?> × <?php echo $taille; ?>) = <?php echo $imc_formate; ?></p>
        <p><em>Formule : IMC = Poids(kg) ÷ Taille²(m)</em></p>
    </div>
</div>
</body>
</html>