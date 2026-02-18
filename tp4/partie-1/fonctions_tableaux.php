<?php


function calculerAgesMoyen(array $equipements): float|int {

    //Version tableau simple
    if (empty($equipements)) {
        return 0;
    }
    return array_sum($equipements) / count($equipements);

    //Version tableau associatf avec au moins une cle age dans chaque élément
    //return array_sum(array_column($equipements, 'age')) / count($equipements);
}

function obtenirPlageAges(array $equipements) : array {

    //verion tableau simple
    return [
        'min' => min($equipements),
        'max' => max($equipements)
    ];

    //version tableau associatif avec au moins une cle age dans chaque élément
//    return [
//        'min' => min(array_column($equipements, 'age')),
//        'max' => max(array_column($equipements, 'age'))
//    ];
}


function compterObsoletes($ages, $seuil = 5) {
    //Métode 1
    //    $compteur = 0;
//    foreach ($ages as $age) {
//        if ($age >= $seuil) {
//            $compteur++;
//        }
//    }
//    return $compteur;

    //Méthode 2
    return count(array_filter($ages, function($age) use ($seuil) {
        return $age >= $seuil;
    }));
}

function analyserParc(array $equipements) {
    return [
        'age_moyen' => calculerAgesMoyen($equipements),
        'plus_ancien' => max($equipements),
        'plus_recent' => min($equipements),
        'obsoletes' => compterObsoletes($equipements)
    ];
}


//////// TESTS //////////

echo "Analyse du parc :<br>";
$equipements = [2, 3, 5, 7, 10];
$resultat = analyserParc($equipements);
echo "Âge moyen : " . $resultat['age_moyen'] . " ans<br>";
echo "Âge du plus ancien : " . $resultat['plus_ancien'] . " ans<br>";
echo "Âge du plus récent : " . $resultat['plus_recent'] . " ans<br>";
echo "Nombre d'équipements obsolètes : " . $resultat['obsoletes'] . "<br>";
