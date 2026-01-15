<?php
$host = "localhost";
$dbname = "e2508053";   
$user = "e2508053";     
$pass = "Lyd791cy";             

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8",
    $user,
    $pass,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (PDOException $e) {
  die("Erreur DB: " . $e->getMessage());
}
