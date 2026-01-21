<?php
echo "<h2>🎯 Simulateur de Jeu de Devinette</h2>";

// === VERSION BASIQUE : RECHERCHE SÉQUENTIELLE ===
$nombre_mystere = 17; // Le nombre à "deviner"
$tentative = 1;

echo "<h3>🔍 Recherche séquentielle du nombre mystère</h3>";
echo "<p><strong>Nombre mystère à trouver :</strong> " . $nombre_mystere . "</p>";

echo "<div style='background-color: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>Processus de recherche :</h4>";

while ($tentative != $nombre_mystere) {
    echo "<div style='margin: 5px 0; padding: 5px; background-color: #fff3cd; border-radius: 3px;'>";
    echo "Tentative " . $tentative . " : " . $tentative . " → ";

    if ($tentative < $nombre_mystere) {
        echo "<span style='color: #856404;'>Trop petit, on continue...</span>";
    } else {
        echo "<span style='color: #856404;'>Trop grand, on continue...</span>";
    }

    echo "</div>";

    $tentative++;

    // Sécurité anti-boucle infinie (ne devrait jamais être atteinte ici)
    if ($tentative > 100) {
        echo "<div style='color: red;'>Erreur : Trop de tentatives, arrêt de sécurité</div>";
        break;
    }
}

if ($tentative == $nombre_mystere) {
    echo "<div style='background-color: #d4edda; padding: 10px; margin: 10px 0; border-radius: 5px; color: #155724;'>";
    echo "<strong>🎉 Trouvé ! Le nombre " . $nombre_mystere . " a été découvert en " . $tentative . " tentatives.</strong>";
    echo "</div>";
}

echo "</div>";

// === VERSION AVEC LIMITATION DE TENTATIVES ===
echo "<hr><h3>⏰ Version avec limitation de tentatives</h3>";

$nombre_mystere_limite = 15;
$tentative_actuelle = 1;
$max_tentatives = 10;
$trouve = false;

echo "<p><strong>Nombre mystère :</strong> " . $nombre_mystere_limite . "</p>";
echo "<p><strong>Limite :</strong> " . $max_tentatives . " tentatives maximum</p>";

echo "<div style='background-color: #e3f2fd; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>Recherche avec limite :</h4>";

while ($tentative_actuelle <= $max_tentatives && !$trouve) {
    echo "<div style='margin: 5px 0; padding: 5px; background-color: " .
        ($tentative_actuelle <= 7 ? "#d1ecf1" : "#f8d7da") . "; border-radius: 3px;'>";

    echo "Tentative " . $tentative_actuelle . "/" . $max_tentatives . " : Test du nombre " . $tentative_actuelle . " → ";

    if ($tentative_actuelle == $nombre_mystere_limite) {
        $trouve = true;
        echo "<span style='color: #155724; font-weight: bold;'>🎯 TROUVÉ !</span>";
    } else {
        echo "<span style='color: #721c24;'>Pas le bon nombre</span>";
    }

    echo "</div>";

    $tentative_actuelle++;
}

if ($trouve) {
    echo "<div style='background-color: #d4edda; padding: 10px; margin: 10px 0; border-radius: 5px; color: #155724;'>";
    echo "<strong>✅ Succès ! Nombre trouvé en " . ($tentative_actuelle - 1) . " tentatives.</strong>";
    echo "</div>";
} else {
    echo "<div style='background-color: #f8d7da; padding: 10px; margin: 10px 0; border-radius: 5px; color: #721c24;'>";
    echo "<strong>❌ Échec ! Nombre non trouvé en " . $max_tentatives . " tentatives. Le nombre était " . $nombre_mystere_limite . ".</strong>";
    echo "</div>";
}

echo "</div>";

// === SIMULATION DE RECHERCHE INTELLIGENTE (DICHOTOMIE) ===
echo "<hr><h3>🧠 Recherche intelligente par dichotomie</h3>";

$nombre_cible = 42;
$min = 1;
$max = 100;
$tentatives_dicho = 0;
$max_tentatives_dicho = 10;

echo "<p><strong>Nombre à trouver :</strong> " . $nombre_cible . " (entre 1 et 100)</p>";

echo "<div style='background-color: #f3e5f5; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>Recherche par dichotomie :</h4>";

while ($min <= $max && $tentatives_dicho < $max_tentatives_dicho) {
    $tentatives_dicho++;
    $milieu = intval(($min + $max) / 2); // Nombre au milieu de l'intervalle

    echo "<div style='margin: 5px 0; padding: 8px; background-color: #e1bee7; border-radius: 3px;'>";
    echo "Tentative " . $tentatives_dicho . " : Intervalle [" . $min . ", " . $max . "] → Test de " . $milieu . " → ";

    if ($milieu == $nombre_cible) {
        echo "<span style='color: #4a148c; font-weight: bold;'>🎯 TROUVÉ !</span>";
        break;
    } elseif ($milieu < $nombre_cible) {
        echo "<span style='color: #7b1fa2;'>Trop petit, on cherche dans [" . ($milieu + 1) . ", " . $max . "]</span>";
        $min = $milieu + 1;
    } else {
        echo "<span style='color: #7b1fa2;'>Trop grand, on cherche dans [" . $min . ", " . ($milieu - 1) . "]</span>";
        $max = $milieu - 1;
    }

    echo "</div>";
}

if ($milieu == $nombre_cible) {
    echo "<div style='background-color: #e8f5e8; padding: 10px; margin: 10px 0; border-radius: 5px; color: #2e7d32;'>";
    echo "<strong>🎯 Nombre trouvé en seulement " . $tentatives_dicho . " tentatives avec la dichotomie !</strong>";
    echo "<br><em>Contre " . $nombre_cible . " tentatives avec la recherche séquentielle.</em>";
    echo "</div>";
}

echo "</div>";
?>