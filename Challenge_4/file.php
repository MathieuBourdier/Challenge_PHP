<?php
$movies=[
    "Mary Poppins"=>["Julie Andrews","Dick Van Dyke"],
    "Back Street"=>["Maragret Sullavan","Charles Boyer","Tim Holt"],
    "Un Neveu Studieux"=>["Annette Funicello","Tommy Kirk","Leon Ames"] ];



foreach ($movies as $name => $actors ){	
echo "Dans le film "." ". "\"$name \"," ." "."les principaux acteurs sont : " . "\n" ;
foreach ($actors as $actor){ echo " $actor,"  ;} 
echo "\n";
}
?>