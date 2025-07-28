<?php
$conn = new mysqli("localhost", "root", "", "webp_games");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
