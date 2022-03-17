<?php 
require_once "connect.php" ;

// modifie le champ password pour les rangées dont l'email est 'jam@gmail.com'
$sql = $pdo->prepare("UPDATE user SET password = 'autrepass' WHERE email = 'jam@gmail.com'" );
// $sql = $pdo->prepare("UPDATE user SET password = 'autrepass' WHERE id = 4 " );
// $sql = $pdo->prepare("UPDATE user SET password = 'autrepass' WHERE nom = "Dupont" AND prenom ="Pol" );

$sql->execute();

// CRUD 
// Creation / Read / Update / Delete 
?>