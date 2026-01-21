<?php
    $jour = "jeudi";

switch ($jour) {
    case "lundi":
        $activite = "Cours de PHP - Salle 101";
        $horaire = "09h00 - 12h00";
        break;
    case "mardi":
    case "mercredi":
        $activite = "Travaux pratiques HTML/CSS";
        $horaire = "08h30 - 17h30";
        break;
    case "jeudi":
    case "vendredi":
        $activite = "Projet personnel - Développement";
        $horaire = "13h00 - 18h00";
        break;
    case "samedi":
        $activite = "Révisions et exercices";
        $horaire = "Flexible";
        break;
    case "dimanche":
        $activite = "Repos et loisirs";
        $horaire = "Toute la journée";
        break;
    default:
        $activite = "Jour non reconnu";
        $horaire = "Vérifiez l'orthographe";
        break;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">📅 Mon Agenda pour le <?php echo ucfirst($jour); ?></h1>
    <div class="card">
        <div class="card-header">
            Activité du jour
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $activite; ?></h5>
            <p class="card-text"><strong>Horaire :</strong> <?php echo $horaire; ?></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
