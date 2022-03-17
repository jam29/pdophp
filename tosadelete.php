<?php
require_once "connect.php" ;
$sql = $pdo->prepare("DELETE FROM user WHERE id = 1 " );
$sql->execute();
?>