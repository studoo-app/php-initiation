<?php

// https://www.php.net/manual/en/ref.strings.php

// Variables de base
$nom = "Dupont";
$prenom = "Marie";
$ville = "Lyon";
$code_postal = "69000";

// Construction des phrases par concaténation
$phrase1 = "Bonjour " . $prenom . " " . $nom . " !";
$phrase1_1 = "Bonjour $prenom $nom";
$phrase2 = "Vous habitez à " . $ville . " (" . $code_postal . ")";

// Pour le nom en majuscules, utilisation de strtoupper()
$phrase3 = "Votre nom complet est " . strtoupper($nom) . " " . $prenom;

// Affichage des résultats
echo $phrase1 . "<br>";
echo $phrase2 . "<br>";
echo $phrase3 . "<br><br>";

// Adresse complète combinant toutes les informations
$adresse_complete = $prenom . " " . $nom . " réside au " . $code_postal . " " . $ville . ".";
echo "Adresse complète : " . $adresse_complete;

echo "<br> ========================================= <br>";

// Variable sous forme de chaîne
$chiffre_ventes = "15000";

// Calcul de l'objectif (20% supérieur)
$objectif_mensuel = $chiffre_ventes * 1.20;

// Affichage du résultat
echo "Ventes actuelles : " . $chiffre_ventes . " € - Objectif : " . $objectif_mensuel . " €<br>";

// Démonstration de la conversion automatique
echo "<br><strong>Explication :</strong><br>";
echo "Type de chiffre_ventes : " . gettype($chiffre_ventes) . "<br>";
echo "Type de objectif_mensuel : " . gettype($objectif_mensuel) . "<br>";
echo "PHP a automatiquement converti la chaîne '15000' en nombre pour effectuer le calcul.";