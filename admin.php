<?php
session_start();
$admin_password = "admin123";

if (isset($_POST["password"])) {
    if ($_POST["password"] === $admin_password) {
        $_SESSION["admin"] = true;
    }
}

if (!isset($_SESSION["admin"])) {
    echo '<form method="POST">
            <input type="password" name="password" placeholder="Admin password">
            <button type="submit">Login</button>
          </form>';
    exit;
}

echo "<h1>Admin Panel</h1>";
echo "<p>GDPS is running.</p>";
?>