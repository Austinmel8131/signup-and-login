CREATE DATABASE demo_db;
USE demo_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  role VARCHAR(10),
  password VARCHAR(255)
);



<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <script>
    // Form validation using JavaScript
    function validateForm() {
      let name = document.forms["regForm"]["username"].value;
      let email = document.forms["regForm"]["email"].value;
      let password = document.forms["regForm"]["password"].value;
      if (!name || !email || !password) {
        alert("All fields are required!");
        return false;
      }
    }
  </script>
</head>
<body>
  <h2>Register</h2>
  <!-- Registration Form -->
  <form name="regForm" action="process_register.php" method="post" onsubmit="return validateForm()">
    Username: <input type="text" name="username"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Register">
  </form>
</body>
</html>