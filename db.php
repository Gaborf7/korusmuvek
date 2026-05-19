<?php
    $servername = "serverless-europe-west9.sysp0000.db2.skysql.com:4046";
    $username = "dbpgf31104580";
    $password = "4f+S6ce7Qy23N}TVVo8TiCVT";
    $dbname = "korusmuvek";

    try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  die("Could not connect. " . $e->getMessage());
}
?>