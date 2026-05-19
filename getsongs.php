<?php
header("Content-Type: application/json");
require "db.php";

$sql = "SELECT enek.id AS id, szerzo.nev AS szerzo, album.cim AS album, enek.cim AS enekcim, albumid, szerzoid, szulev, halev, szoveg
FROM enek, szerzo, album
WHERE szerzoid = szerzo.id AND albumid = album.id;";

$stmt = $conn->prepare($sql);

$stmt->execute();

echo json_encode(
    $stmt->fetchAll(PDO::FETCH_ASSOC)
);