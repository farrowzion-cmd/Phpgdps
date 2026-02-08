<?php
require_once("config.php");

$name = $_POST["name"] ?? "Unnamed";
$creator = $_POST["creator"] ?? "Unknown";
$data = $_POST["data"] ?? "";

$stmt = $conn->prepare("INSERT INTO levels (name, creator, data) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $creator, $data);
$stmt->execute();

echo "1";
?>