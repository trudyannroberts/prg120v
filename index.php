<?php
$host = "dokploy.usn.no";
$user = "888846";
$pass = "71f2888846";
$db   = "888846";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully!";
?>
