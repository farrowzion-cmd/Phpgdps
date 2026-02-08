<?php
require_once("config.php");

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if (!$username || !$password) {
    die("-1");
}

$stmt = $conn->prepare("SELECT id FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    die("-2");
}

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "1";
?>