<?php
echo "<hr><h2>📊 Calculateur de Statistiques</h2>";

// === SOMME ET MOYENNE DE 1 À 100 ===
echo "<h3>🧮 Calculs sur la série 1 à 100</h3>";

$somme = 0;
$nombre_total = 100;

// Calcul de la somme avec boucle for
for ($i = 1; $i <= $nombre_total; $i++) {
    $somme += $i; // Équivalent à : $somme = $somme + $i;
}

$moyenne = $somme / $nombre_total;

echo "<div style='background-color: #d4edda; padding: 20px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>Résultats des calculs :</h4>";
echo "<p><strong>Somme des nombres de 1 à " . $nombre_total . " :</strong> " . $somme . "</p>";
echo "<p><strong>Moyenne :</strong> " . $moyenne . "</p>";
echo "<p><em>Vérification : La formule mathématique n×(n+1)/2 donne : " . ($nombre_total * ($nombre_total + 1) / 2) . "</em></p>";
echo "</div>";

// === DÉFIS NUMÉRIQUES ===
echo "<hr><h3>🎯 Défis numériques</h3>";

// Comptage des nombres divisibles par 3 entre 1 et 50
$compteur_divisibles_par_3 = 0;
$nombres_divisibles = [];

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0) { // Le modulo teste la divisibilité
        $compteur_divisibles_par_3++;
        $nombres_divisibles[] = $i; // Stockage pour affichage
    }
}

echo "<div style='background-color: #fff3cd; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>🔍 Nombres divisibles par 3 entre 1 et 50 :</h4>";
echo "<p><strong>Quantité trouvée :</strong> " . $compteur_divisibles_par_3 . "</p>";
echo "<p><strong>Les nombres :</strong> " . implode(", ", $nombres_divisibles) . "</p>";
echo "</div>";

// Recherche du plus grand nombre dont le carré est inférieur à 1000
$nombre_trouve = 0;

for ($i = 1; $i < 100; $i++) { // Limite raisonnable pour éviter les calculs inutiles
    $carre = $i * $i;
    if ($carre < 1000) {
        $nombre_trouve = $i; // On garde le dernier nombre valide
    } else {
        break; // Dès qu'on dépasse 1000, on s'arrête
    }
}

echo "<div style='background-color: #d1ecf1; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>🔍 Plus grand nombre dont le carré < 1000 :</h4>";
echo "<p><strong>Nombre trouvé :</strong> " . $nombre_trouve . "</p>";
echo "<p><strong>Son carré :</strong> " . ($nombre_trouve * $nombre_trouve) . "</p>";
echo "<p><strong>Vérification :</strong> " . ($nombre_trouve + 1) . "² = " . (($nombre_trouve + 1) * ($nombre_trouve + 1)) . " (dépasse 1000)</p>";
echo "</div>";

// === ANALYSE COMPARATIVE ===
echo "<hr><h3>📈 Analyse comparative des méthodes</h3>";

// Comparaison entre calcul par boucle et formule mathématique
$debut_temps = microtime(true);
$somme_boucle = 0;
for ($i = 1; $i <= 10000; $i++) {
    $somme_boucle += $i;
}
$temps_boucle = microtime(true) - $debut_temps;

$debut_temps = microtime(true);
$somme_formule = 10000 * (10000 + 1) / 2;
$temps_formule = microtime(true) - $debut_temps;

echo "<div style='background-color: #f8d7da; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
echo "<h4>⚡ Performance : Boucle vs Formule mathématique</h4>";
echo "<p><strong>Somme 1 à 10000 par boucle :</strong> " . $somme_boucle . " (temps : " . round($temps_boucle * 1000000, 2) . " microsecondes)</p>";
echo "<p><strong>Somme par formule n×(n+1)/2 :</strong> " . $somme_formule . " (temps : " . round($temps_formule * 1000000, 2) . " microsecondes)</p>";
echo "<p><em>Enseignement : Quand c'est possible, utilisez les formules mathématiques pour de meilleures performances !</em></p>";
echo "</div>";
?>