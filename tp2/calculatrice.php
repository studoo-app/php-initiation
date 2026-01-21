<?php
// === DONNÉES D'ENTRÉE ===
$nombre1 = 15;
$nombre2 = 4;
$operation = "/"; // Changez pour tester : +, -, *, /

echo "<h2>🧮 Calculatrice Intelligente</h2>";
echo "<p><strong>Calcul demandé :</strong> " . $nombre1 . " " . $operation . " " . $nombre2 . "</p>";

// === VALIDATION DES DONNÉES ===
$donnees_valides = true;
$message_erreur = "";

// Vérification que les nombres sont bien numériques
if (!is_numeric($nombre1)) {
    $donnees_valides = false;
    $message_erreur .= "Le premier nombre n'est pas valide. ";
}

if (!is_numeric($nombre2)) {
    $donnees_valides = false;
    $message_erreur .= "Le second nombre n'est pas valide. ";
}

// Vérification spéciale pour la division par zéro
if ($operation == "/" && $nombre2 == 0) {
    $donnees_valides = false;
    $message_erreur .= "Division par zéro impossible ! ";
}

// === TRAITEMENT SI DONNÉES VALIDES ===
if ($donnees_valides) {
    $resultat = 0;
    $operation_trouvee = true;

    // Structure if/elseif pour chaque opération
    if ($operation == "+") {
        $resultat = $nombre1 + $nombre2;
        $nom_operation = "Addition";
    } elseif ($operation == "-") {
        $resultat = $nombre1 - $nombre2;
        $nom_operation = "Soustraction";
    } elseif ($operation == "*") {
        $resultat = $nombre1 * $nombre2;
        $nom_operation = "Multiplication";
    } elseif ($operation == "/") {
        $resultat = $nombre1 / $nombre2;
        $nom_operation = "Division";
        // Formatage spécial pour la division
        $resultat = round($resultat, 4); // Limite à 4 décimales
    } else {
        $operation_trouvee = false;
    }

    // Affichage du résultat
    if ($operation_trouvee) {
        echo "<div style='background-color: #d4edda; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
        echo "<h3 style='color: #155724; margin: 0;'>✅ Résultat</h3>";
        echo "<p style='font-size: 18px; margin: 10px 0;'>";
        echo "<strong>" . $nombre1 . " " . $operation . " " . $nombre2 . " = " . $resultat . "</strong>";
        echo "</p>";
        echo "<p style='margin: 0; color: #155724;'>";
        echo "<em>Opération effectuée : " . $nom_operation . "</em>";
        echo "</p>";
        echo "</div>";
    } else {
        echo "<div style='background-color: #f8d7da; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
        echo "<h3 style='color: #721c24; margin: 0;'>❌ Erreur</h3>";
        echo "<p style='margin: 10px 0;'>Opération '" . $operation . "' non reconnue.</p>";
        echo "<p style='margin: 0;'><strong>Opérations supportées :</strong> +, -, *, /</p>";
        echo "</div>";
    }
} else {
    // Affichage des erreurs de validation
    echo "<div style='background-color: #f8d7da; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
    echo "<h3 style='color: #721c24; margin: 0;'>⚠️ Données invalides</h3>";
    echo "<p style='margin: 10px 0;'>" . $message_erreur . "</p>";
    echo "</div>";
}

// === DÉMONSTRATION AVEC DIFFÉRENTS CAS ===
echo "<hr><h3>🧪 Tests automatiques</h3>";

$tests = [
    [10, 5, "+"],
    [20, 3, "-"],
    [7, 6, "*"],
    [15, 3, "/"],
    [10, 0, "/"], // Test division par zéro
    [5, 2, "%"],  // Test opération invalide
];

foreach ($tests as $test) {
    $n1 = $test[0];
    $n2 = $test[1];
    $op = $test[2];

    echo "<div style='margin: 5px 0; padding: 8px; background-color: #e9ecef; border-radius: 3px;'>";
    echo "<strong>Test :</strong> " . $n1 . " " . $op . " " . $n2 . " = ";

    if ($op == "/" && $n2 == 0) {
        echo "<span style='color: red;'>Erreur (division par zéro)</span>";
    } elseif (in_array($op, ["+", "-", "*", "/"])) {
        switch ($op) {
            case "+": echo ($n1 + $n2); break;
            case "-": echo ($n1 - $n2); break;
            case "*": echo ($n1 * $n2); break;
            case "/": echo round($n1 / $n2, 4); break;
        }
    } else {
        echo "<span style='color: orange;'>Opération invalide</span>";
    }
    echo "</div>";
}
?>