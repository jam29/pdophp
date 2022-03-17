<?php
// Database settings

$db="tosa";
$dbhost="127.0.0.1";
$dbport=3306;
$dbuser="root";
$dbpasswd="";

$pdo = new PDO(
    "mysql:host=127.0.0.1;dbname=".$db.";charset=UTF8", $dbuser, $dbpasswd,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );

$stmt = $pdo->prepare("SELECT * FROM user WHERE id=?");
$stmt->bindParam(1,$id);
$stmt->execute();

$res = $stmt->fetchAll();
print_r($res);
foreach ( $res as $row ) {
    echo $row['id'];
}
 
?>