<?php 
require_once "connect.php" ;

$sql = $pdo->prepare("SELECT * FROM user WHERE id = 1 ");
$sql->execute(); 
$row = $sql->fetch(); 
print_r($row);
?>