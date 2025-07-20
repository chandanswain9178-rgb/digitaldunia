<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Welcome</title></head>
<body style="text-align:center; margin-top:100px;">
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
  <a href="logout.php">Logout</a>
</body>
</html>
