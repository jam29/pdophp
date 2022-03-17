<?php

function additionner10($a ,$b ) {
    // cette fonction permet l'addition de 2 numeriques ayant la valeur 10 maximum
    // tester si les 2 arguments nombres sont numeriques 
    if (!is_numeric($a) || !is_numeric($b)) {
        // si $a ou $b n'est pas numérique on lève un exception
            throw new Exception("les 2 arguments doivent être numériques");
        }
    if ( ($a > 10) || ($b > 10 )) {
        // si $a ou $b > 10 je leve une exception 
            throw new Exception("a et b doivent être < 11");
    }
    return $a + $b ;  
}
// fin function additionner10
 
// programme principal 
try {
// essaye de faire ce qui suit.
    echo additionner10(10,5)."\n";
    echo additionner10("azerty",54)."\n";
}
catch(Exception $e) {
    // si une Exception est levée , c'est à dire qu'il y a eu l'exécution de throw new Exception
    echo "une erreur s'est produite: ".$e->getMessage()."\n";
}


echo "le programme continue<br>";

?>
