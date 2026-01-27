<?php
// === DONNÉES D'ENTRÉE ===
$nombre1 = 15;
$nombre2 = 4;
$operation = "/"; // Changez pour tester : +, -, *, /
$resultat = null;

if($nombre2 === "0" && $operation === "/") {
    $resultat = "Erreur : Division par zéro impossible.";
} else {
    // === LOGIQUE DE LA CALCULATRICE ===
    switch ($operation) {
        case "+":
            $resultat = $nombre1 + $nombre2;
            break;
        case "-":
            $resultat = $nombre1 - $nombre2;
            break;
        case "*":
            $resultat = $nombre1 * $nombre2;
            break;
        case "/":
            $resultat = $nombre1 / $nombre2;
            break;
        default:
            $resultat = "Erreur : Opération non reconnue.";
            break;
    }
}

echo $resultat;


// === CALCULATRICE SIMPLE ===
?>