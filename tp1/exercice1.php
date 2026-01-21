<?php
// Déclaration des variables personnelles
$mon_prenom = "Marie";
$mon_age = 20;
$ma_taille = 1.68;
$suis_etudiant = true;

// Affichage des variables
echo "Prénom : " . $mon_prenom . "<br>";
echo "Âge : " . $mon_age . "<br>";
echo "Taille : " . $ma_taille . "m<br>";
echo "Étudiant : " . $suis_etudiant . "<br><br>";

// Affichage des types avec gettype()
echo "Type de mon_prenom : " . gettype($mon_prenom) . "<br>";
echo "Type de mon_age : " . gettype($mon_age) . "<br>";
echo "Type de ma_taille : " . gettype($ma_taille) . "<br>";
echo "Type de suis_etudiant : " . gettype($suis_etudiant) . "<br><br>";

// Phrase de présentation complète
$presentation = "Je m'appelle " . $mon_prenom . ", j'ai " . $mon_age . " ans, je mesure " . $ma_taille . "m et je suis étudiant.";
echo $presentation;

echo " ========================================= <br>";


// Variables avec types différents
$nombre1 = "15";  // String
$nombre2 = 25;    // Integer

// Affichage des types
echo "Type de nombre1 ('15') : " . gettype($nombre1) . "<br>";
echo "Type de nombre2 (25) : " . gettype($nombre2) . "<br><br>";

// Addition et affichage du résultat
$resultat = $nombre1 + $nombre2;
echo "Résultat de l'addition : " . $resultat . "<br>";
echo "Type du résultat : " . gettype($resultat) . "<br>";

// Explication du phénomène observé
echo "<br><strong>Observation :</strong> PHP convertit automatiquement la chaîne '15' en nombre pour effectuer l'addition. C'est ce qu'on appelle la conversion automatique de type (type juggling).";