<?php

//1. Créer une fonction qui affiche "bienvenue sur site".
//affichage direct
/* function welcome(){
    echo 'Bienvenue sur le site';
} */

//1.bis Créer une fonction qui affiche "bienvenue sur site".
//Met une chaine dans une variable mais pas d'affichage
/* function welcomeBis(){
    $msg = "Bienvenue sur le site";

    return $msg;
} */

//2. et 3.  Modifier la fonction pour mettre le message en paramètre


function welcome($msg){
    global $firstname;
    echo $firstname;
    echo strtoupper($msg);
}

//2.bis et 3. Modifier la fonction pour mettre le message en paramètre
function welcomebis($msg){
    
    return strtoupper($msg);
}


function compteur(){
    static $i;

    if(empty($i)) {
        $i=0;
    }

    echo ++$i;

  
}
