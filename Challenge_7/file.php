<?php
$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ],
    "Mathieu Bourdier" =>[
        "city" => "Paris",
        "weapon" => "Chainsaw",
    ],
];

echo $characters["Mathieu Bourdier"]["city"];
echo '\n';
print $characters["Mathieu Bourdier"]["weapon"];

var_dump($characters);