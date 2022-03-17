<?php 
require_once "connect.php" ;

$email  = $_POST['email'];
$passwd = $_POST['password'];   // le mot de passe arrive en clair
$email  = $_POST['nom'];
$email  = $_POST['prenom'];

// il faut toujours crypter le mot de passe inscrit dans une BDD. 
$hash_password = password_hash($passwd, PASSWORD_DEFAULT);
echo $hash_password  ;
try {
// je le transforme en mot de passe crypté avant de l'enregistrer.
$sql = $pdo->prepare("INSERT INTO user (email,password,nom,prenom) VALUES (?,?,?,?)");
$sql->execute([$email,$hash_password,$snom,$prenom]);
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>