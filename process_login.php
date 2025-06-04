<?php
session_start();
include 'db.php';

// Get login input
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists in the database
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// If user found, verify password
if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();
  if (password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    if ($user['role'] === 'admin') {
      header("Location: admin.php");
    } else {
      header("Location: main.php");
    }
  } else {
    echo "<script>alert('Invalid credentials.'); window.location='login.php';</script>";
  }
} else {
  echo "<script>alert('User not found.'); window.location='login.php';</script>";
}
?>