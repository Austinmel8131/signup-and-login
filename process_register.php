<?php
include 'db.php';

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Check if an admin already exists
$checkAdmin = "SELECT COUNT(*) AS admin_count FROM users WHERE role = 'admin'";
$result = $conn->query($checkAdmin);
$row = $result->fetch_assoc();
$adminExists = $row['admin_count'] > 0;

// Assign role: if no admin, make this user admin. Else, make user.
$role = $adminExists ? 'user' : 'admin';

// Insert data into database
$sql = "INSERT INTO users (username, email, role, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $role, $password);

if ($stmt->execute()) {
  echo "<script>alert('Registration successful!'); window.location='index.php';</script>";
} else {
  echo "<script>alert('Registration failed.'); window.location='register.php';</script>";
}
?>
