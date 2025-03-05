<?php 
//Décodage des messages
$message1= "0@sn9sirppa@#?ia'jgtvryko1" ;
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj" ;
$message3="aopi?sgnirts@#?sedhtg+p9l!" ;

 //création d'une fonction qui va décoder le message

function decodage($message1){
$key=strlen($message1)/2 ;   
$subStr= substr("$message1",5,$key); 
$replaced= str_replace("@#?"," ", $subStr); 
$reversed= strrev($replaced) ; 
echo $reversed ." " ;       
}

decodage($message1);
decodage($message2); 
decodage($message3);

?>