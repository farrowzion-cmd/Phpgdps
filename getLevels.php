<?php
require_once("config.php");
header("Content-Type: text/plain");

$result = $conn->query("SELECT * FROM levels");

while ($row = $result->fetch_assoc()) {
    echo $row["id"] . ":" .
         $row["name"] . ":" .
         $row["creator"] . ":" .
         $row["downloads"] . ":0:0:0|";
}
?>