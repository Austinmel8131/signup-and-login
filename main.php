<?php include 'navbar.php'; ?>
<?php
session_start();
// Redirect to login if not logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<body>
  <!-- Welcome message -->
  <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
  <p>You are logged in as <strong><?php echo $_SESSION['role']; ?></strong>.</p>

  <!-- Role based content -->
  <?php if ($_SESSION['role'] == 'admin') echo '<p>This is the admin panel.</p>'; ?>
</body>
</html>