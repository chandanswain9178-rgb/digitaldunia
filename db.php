<?php
$host = "sqlXXX.epizy.com"; // Replace with your InfinityFree DB host
$dbname = "epiz_XXXXXXX_mydb"; // Replace with your DB name
$username = "epiz_XXXXXXX"; // Replace with your DB username
$password = "your_db_password"; // Set in InfinityFree

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
