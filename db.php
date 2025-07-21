<?php
$host = "sql107.infinityfree.com"; // Replace with your InfinityFree DB host
$dbname = "if0_39519479_db"; // Replace with your DB name
$username = "if0_39519479"; // Replace with your DB username
$password = "ez99J5U9wGGQ08"; // Set in InfinityFree

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
