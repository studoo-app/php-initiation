<?php

$utilisateur = [
    "nom"=>"Doe",
    "prenom"=>"John",
    "age"=>30,
    "email"=>"j.doe mail.Dev",
    "ville"=>"Paris"
];

function loop($array){
    foreach ($array as $cle => $valeur) {
        echo "$cle : $valeur<br>";
    }
    echo "<br>";
}

loop($utilisateur);

$utilisateur["telephone"] =  "0102030405";

loop($utilisateur);

$utilisateur["age"] =  19;

loop($utilisateur);

unset($utilisateur["email"]);

loop($utilisateur);
