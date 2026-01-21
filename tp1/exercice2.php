<?php
// Variables de base
$prix_unitaire = 12.50;
$quantite = 8;

// Calculs
$prix_total_ht = $prix_unitaire * $quantite;
$tva = $prix_total_ht * 0.20;
$prix_total_ttc = $prix_total_ht + $tva;

// Affichage formaté
echo "<h2>Facture détaillée</h2>";
echo "Prix unitaire : " . $prix_unitaire . " €<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Prix total HT : " . $prix_total_ht . " €<br>";
echo "TVA (20%) : " . $tva . " €<br>";
echo "Prix total TTC : " . $prix_total_ttc . " €<br>";

// Alternative avec un meilleur formatage des décimales
echo "<hr><h3>Version avec formatage amélioré :</h3>";
echo "Prix total HT : " . number_format($prix_total_ht, 2) . " €<br>";
echo "TVA (20%) : " . number_format($tva, 2) . " €<br>";
echo "Prix total TTC : " . number_format($prix_total_ttc, 2) . " €<br>";


echo " ========================================= <br>";

// Variables pour les notes
$note1 = 14;
$note2 = 16;

// Comparaisons stockées dans des variables booléennes
$note1_superieure = $note1 > $note2;
$notes_egales = $note1 == $note2;
$note1_suffisante = $note1 >= 10;

// Affichage des résultats avec explications
echo "<h2>Analyse des notes</h2>";
echo "Note 1 : " . $note1 . "/20<br>";
echo "Note 2 : " . $note2 . "/20<br><br>";

echo "Note 1 supérieure à Note 2 ? " . ($note1_superieure ? "OUI" : "NON") . "<br>";
echo "Les notes sont égales ? " . ($notes_egales ? "OUI" : "NON") . "<br>";
echo "Note 1 suffisante (≥10) ? " . ($note1_suffisante ? "OUI" : "NON") . "<br>";

// Affichage alternatif plus détaillé
echo "<hr><h3>Analyse détaillée :</h3>";
if ($note1_superieure) {
    echo "La note 1 (" . $note1 . ") est effectivement supérieure à la note 2 (" . $note2 . ").<br>";
} else {
    echo "La note 1 (" . $note1 . ") n'est pas supérieure à la note 2 (" . $note2 . ").<br>";
}