<?php
$planning_complet = [
        "lundi" => [
                "activite" => "Cours de PHP - Structures de contrôle",
                "horaire" => "09h00 - 12h00",
                "lieu" => "Salle informatique 101",
                "type" => "cours"
        ],
        "mardi" => [
                "activite" => "Réunion projet BTS",
                "horaire" => "14h00 - 16h00",
                "lieu" => "Salle de conférence A",
                "type" => "projet"
        ],
        "mercredi" => [
                "activite" => "TP HTML/CSS Responsive",
                "horaire" => "08h30 - 17h30",
                "lieu" => "Laboratoire web",
                "type" => "tp"
        ],
        "jeudi" => [
                "activite" => "Base de données MySQL",
                "horaire" => "10h00 - 12h00",
                "lieu" => "Salle serveurs",
                "type" => "cours"
        ],
        "vendredi" => [
                "activite" => "Projet portfolio personnel",
                "horaire" => "13h00 - 18h00",
                "lieu" => "Espace projet",
                "type" => "projet"
        ],
        "samedi" => [
                "activite" => "Révisions et exercices libres",
                "horaire" => "Flexible",
                "lieu" => "À domicile",
                "type" => "revision"
        ],
        "dimanche" => [
                "activite" => "Repos et récupération",
                "horaire" => "Toute la journée",
                "lieu" => "Personnel",
                "type" => "repos"
        ]
];




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
    <h1 class="mb-4">📅 Mon Agenda</h1>
    <div class="card">
        <div class="card-header">
            Planning hebdomadaire
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>
                        <td>Horaire</td>
                        <td>Type</td>
                        <td>Lieu</td>
                        <td>Activités</td>
                    </th>
                </thead>
                <tbody>
                    <?php
                        foreach($planning_complet as $jour => $details) {
                            $trClass =  "";
                            switch ($details["type"]) {
                                case "cours":
                                    $trClass = "table-primary";
                                    break;
                                case "projet":
                                    $trClass = "table-secondary";
                                    break;
                                case "tp":
                                    $trClass = "table-success";
                                    break;
                                case "revision":
                                    $trClass = "table-warning";
                                    break;
                                case "repos":
                                    $trClass = "table-info";
                                    break;
                                default:
                                    $trClass = "table-light";
                                    break;
                            }



                            echo "<tr class='" . $trClass . "'>";
                            echo "<td><strong>" . ucfirst($jour) . "</strong></td>";
                            echo "<td>" . $details['horaire'] . "</td>";
                            echo "<td>" . ucfirst($details['type']) . "</td>";
                            echo "<td>" . $details['lieu'] . "</td>";
                            echo "<td>" . $details['activite'] . "</td>";
                            echo "</tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
