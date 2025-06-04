<?php include 'index.php'; ?>

<?php
session_start();
// Restrict access to admin only
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<body>
  <h2>Admin Panel</h2>
  <p>Welcome, <?php echo $_SESSION['username']; ?>. You have administrator access.</p>

  <p><a href="index.php">Logout</a></p>
</body>
</html>