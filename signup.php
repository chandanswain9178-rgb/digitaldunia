<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST['username']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $check = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $check->bind_param("s", $username);
  $check->execute();
  $result = $check->get_result();

  if ($result->num_rows > 0) {
    echo "Username already taken. <a href='signup.html'>Try again</a>";
  } else {
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
      echo "Signup successful. <a href='login.html'>Login now</a>";
    } else {
      echo "Error: " . $stmt->error;
    }
  }
  $check->close();
  $conn->close();
}
?>
