<?php

// Informations personnelles
$nom = "Batman";
$prenom = "Julien";
$age = "39";
$ville = "Maisons Alfort";

// Informations de formation
$etablissement = "ORT Montreuil";
$formation = "Développeur Web";
$annee = "2026";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
        }
    </style>
</head>
<body>
<h1><?php echo "$prenom $nom" ?></h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Informations Formation</div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Prenom Nom</dt>
                        <dd class="col-sm-8"><?php echo "$prenom $nom" ?></dd>

                        <dt class="col-sm-4">Age</dt>
                        <dd class="col-sm-8"><?php echo $age ?></dd>

                        <dt class="col-sm-4">Ville</dt>
                        <dd class="col-sm-8"><?php echo $ville ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Informations Formation</div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Etablissement</dt>
                        <dd class="col-sm-8"><?php echo $etablissement ?></dd>

                        <dt class="col-sm-4">Formation</dt>
                        <dd class="col-sm-8"><?php echo $formation ?></dd>

                        <dt class="col-sm-4">Année</dt>
                        <dd class="col-sm-8"><?php echo $annee ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

