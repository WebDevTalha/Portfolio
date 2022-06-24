<?php
$host = "localhost";
$db_name = "accounts";
$user = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



// Count any Column Value from Profile Table
function pfRowCount($col, $val) {
  global $pdo;
  $stm=$pdo->prepare("SELECT $col FROM portfolio WHERE $col=?");
  $stm->execute(array($val));
  $count = $stm->rowCount();
  return $count;
}