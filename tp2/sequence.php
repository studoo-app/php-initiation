<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col mt-2">
                <div class="card">
                    <div class="card-header">Séquences Simples</div>
                    <div class="card-body">
                        <h3>Nombre de 1 à 10</h3>
                        <ul class="list-group">
                            <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    echo "<li class='list-group-item'>" . $i . "</li>";
                                }
                            ?>
                        </ul>
                        <hr>
                        <h3>Nombre pairs de 2 à 20</h3>
                        <ul class="list-group">
                            <?php
                            for ($i = 2; $i <= 20; $i += 2) {
                                echo "<li class='list-group-item'>" . $i . "</li>";
                            }
                            ?>
                        </ul>
                        <hr>
                        <h3>Nombre de 10 à 1</h3>
                        <ul class="list-group">
                            <?php
                            for ($i = 10; $i >= 1; $i--) {
                                echo "<li class='list-group-item'>" . $i . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col mt-2">
                <div class="card">
                    <div class="card-header">Table de multiplication</div>
                    <div class="card-body">
                        <h3>Table de multiplication de 5</h3>
                        <ul class="list-group">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                $result = 5 * $i;
                                echo "<li class='list-group-item'>5 x " . $i . " = " . $result . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col mt-2">
                <div class="card">
                    <div class="card-header">Pyramides de nombres</div>
                    <div class="card-body">
                        <h3>Pyramide de nombres</h3>
                        <?php
                        for ($ligne = 1; $ligne <= 5; $ligne++) {
                            // Boucle externe : contrôle le nombre de lignes

                            for ($nombre = 1; $nombre <= $ligne; $nombre++) {
                                // Boucle interne : affiche les nombres de 1 à $ligne
                                echo $nombre . " ";
                            }
                            echo "<br>"; // Nouvelle ligne après chaque rangée
                        }
                        ?>

                        <hr>
                        <h3 class="mt-2">Pyramide de nombres stylisée</h3>
                        <?php
                            echo "<div style='background-color: #fff3e0; padding: 20px; margin: 10px 0; border-radius: 5px;'>";

                            for ($ligne = 1; $ligne <= 5; $ligne++) {
                                echo "<div style='text-align: center; margin: 5px 0;'>";

                                for ($nombre = 1; $nombre <= $ligne; $nombre++) {
                                    echo "<span style='display: inline-block; width: 30px; height: 30px; line-height: 30px; background-color: #ff6b6b; color: white; margin: 2px; border-radius: 50%; text-align: center;'>";
                                    echo $nombre;
                                    echo "</span>";
                                }

                                echo "</div>";
                            }
                            echo "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
