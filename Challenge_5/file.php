<?php
$weapons = ['sabre laser', 'lance flamme', 'Chuck Norris'];

$opponentWeapon = $weapons[rand(0, 2)];

if ($opponentWeapon === 'sabre laser') {
    $stevensonWeapon = 'Chuck Norris'; 
} elseif ($opponentWeapon === 'lance flamme') {
    $stevensonWeapon = 'sabre laser';
} else { 
    $stevensonWeapon = 'lance flamme';
}

echo "L'adversaire a choisi : $opponentWeapon\n";
echo "Stevenson choisit : $stevensonWeapon\n";
?>
