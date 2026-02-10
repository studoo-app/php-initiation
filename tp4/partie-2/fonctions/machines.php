<?php

function calculerAgeEquipement(int $anneeAchat): int
{
    //Méthode 1
    //return 2025 - $anneeAchat;

    //Méthode 2
    //return date("Y") - $anneeAchat;

    //Methode 3
    return new DateTime("now")->diff(new DateTime("{$anneeAchat}-01-01"))->y;
}

function calculerFinGarantie(int $anneeAchat, int $dureeGarantie = 3): int
{
    //Méthode 1
    //return ($anneeAchat + $dureeGarantie) - date("Y");

    //Méthode 2
    $date = new DateTime("{$anneeAchat}-01-01");
    $date->modify("+$dureeGarantie years");
    return $date->format('Y');

}

function calculerAgesMoyen(array $equipements): float|int {
    if (empty($equipements)) {
        return 0;
    }
    return array_sum($equipements) / count($equipements);
}

function compterParType($machines) {
    $compteurs = [];
    foreach ($machines as $machine) {
        $type = $machine['type'];
        if (!isset($compteurs[$type])) {
            $compteurs[$type] = 0;
        }
        $compteurs[$type]++;
    }
    return $compteurs;
}