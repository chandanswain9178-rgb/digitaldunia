<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST['username']);
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['username'] = $username;
      header("Location: welcome.php");
      exit();
    } else {
      echo "Incorrect password. <a href='login.html'>Try again</a>";
    }
  } else {
    echo "User not found. <a href='login.html'>Try again</a>";
  }

  $stmt->close();
  $conn->close();
}
?>

