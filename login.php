<?php
require_once("config.php");

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if (!$username || !$password) {
    die("-1");
}

$stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
    die("-1");
}

$stmt->bind_result($dbpass);
$stmt->fetch();

if ($dbpass === $password) {
    echo "1";
} else {
    echo "-1";
}
?>