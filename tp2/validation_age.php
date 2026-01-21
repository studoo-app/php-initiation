<?php
// === VALIDATION SIMPLE ===
$age = 20; // Modifiez cette valeur pour tester différents cas

echo "<h2>🔐 Système de contrôle d'accès</h2>";
echo "<p><strong>Âge testé :</strong> " . $age . " ans</p>";

// Version basique avec if/else simple
if ($age >= 18) {
    echo "<p style='color: green;'>✅ <strong>Accès autorisé</strong></p>";
} else {
    echo "<p style='color: red;'>❌ <strong>Accès refusé</strong></p>";
}

echo "<hr>";

// === VALIDATION AVEC CATÉGORIES ===
echo "<h3>📊 Analyse détaillée par catégorie</h3>";

// L'ordre des conditions est crucial ici !
// On teste du plus spécifique au plus général
if ($age < 0 || $age > 120) {
    // Gestion des cas impossibles en premier
    echo "<p style='color: orange;'>⚠️ <strong>Erreur : Âge invalide</strong> (doit être entre 0 et 120 ans)</p>";
} elseif ($age < 13) {
    // Moins de 13 ans
    echo "<p style='color: blue;'>👶 <strong>Accès enfant</strong> - Surveillance parentale requise</p>";
} elseif ($age >= 13 && $age <= 17) {
    // Entre 13 et 17 ans inclus
    echo "<p style='color: purple;'>🧒 <strong>Accès mineur</strong> - Autorisation parentale nécessaire</p>";
} elseif ($age == 18) {
    // Cas spécial pour féliciter la majorité
    echo "<p style='color: gold;'>🎉 <strong>Félicitations !</strong> Vous venez d'atteindre la majorité - Accès autorisé</p>";
} else {
    // 19 ans et plus
    echo "<p style='color: green;'>✅ <strong>Accès autorisé</strong> - Bienvenue</p>";
}

// === DÉMONSTRATION AVEC PLUSIEURS VALEURS ===
echo "<hr><h3>🧪 Tests automatiques avec différentes valeurs</h3>";

$ages_test = [-5, 10, 16, 18, 25, 150]; // Tableau de valeurs à tester

foreach ($ages_test as $age_test) {
    echo "<div style='margin: 10px 0; padding: 10px; background-color: #f8f9fa; border-radius: 5px;'>";
    echo "<strong>Test avec " . $age_test . " ans :</strong> ";

    if ($age_test < 0 || $age_test > 120) {
        echo "<span style='color: orange;'>Âge invalide</span>";
    } elseif ($age_test < 13) {
        echo "<span style='color: blue;'>Accès enfant</span>";
    } elseif ($age_test <= 17) {
        echo "<span style='color: purple;'>Accès mineur</span>";
    } elseif ($age_test == 18) {
        echo "<span style='color: gold;'>Félicitations pour la majorité !</span>";
    } else {
        echo "<span style='color: green;'>Accès autorisé</span>";
    }
    echo "</div>";
}