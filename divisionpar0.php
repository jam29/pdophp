<?php

function division($dividende , $diviseur) {
    if ($diviseur == 0) {
        throw new Exception("Division par zero interdite");
    }
    return $dividende / $diviseur ;
}
// fin de fonction

// faire une division 5/0 en utilisant le try{} catch{}.
try {
    division(5,0);
}

catch (Exception $e) {
    echo "erreur:".$e->getMessage();
}

