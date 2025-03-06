<?php

$book = array(
    "L'ile au trésor" => 1883,
    "My Shadow" => 1885,
    "Enlevé " => 1886
);

asort($book);

foreach ($book as $title => $year) {
    echo $year . " - " . $title . "\n";
}
?>