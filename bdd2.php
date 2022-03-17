<?php
// Database settings
$db="tosa";
$dbhost="127.0.0.1";
$dbport=3306;
$dbuser="root";
$dbpasswd="";

$pdo = new PDO(
    "mysql:host=127.0.0.1;dbname=".$db.";charset=UTF8", $dbuser, $dbpasswd);

$stmt = $pdo->prepare("SELECT * FROM user WHERE id = 2");
$stmt->execute();

$res = $stmt->fetch();
print_r($res);
/*
foreach ( $res as $row ) {
    echo $row['id'];
}
*/
 
?>
