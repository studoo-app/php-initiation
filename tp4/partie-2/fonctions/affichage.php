<?php

function afficherTitre($titre, $niveau = 1) {
    if($niveau < 1 || $niveau > 6) {
        $niveau = 1; // Niveau par défaut
    }
    echo "<h$niveau>$titre</h$niveau>";
}

function afficherTableauInventaire(array $inventaire, $entetes) {
    echo "<table>";
    echo "<tr>";
    foreach ($entetes as $entete) {
        echo "<th>$entete</th>";
    }
    echo "</tr>";
    foreach($inventaire as $machine) {
        echo "<tr>";

        foreach ($machine as $index=>$prop) {
            $color = ($index == 2 && $prop > 5) ? "red" : "black"; // Rouge si âge > 5 ans
            $style = "style='color:$color;'";
            echo "<td $style>$prop</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//function afficherParc(array $inventaire) {
//    afficherTitre("Inventaire du parc informatique", 2);
//    $entetes = ['ID', 'Type', 'Âge (ans)', 'Obsolète'];
//    afficherTableauInventaire($inventaire, $entetes);
//}

