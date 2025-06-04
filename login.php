<?php 
// include 'navbar.php'; 
?>  

<!DOCTYPE html>
<html>
<head>
  <script>
    // Login form validation
    function validateLogin() {
      let email = document.forms["loginForm"]["email"].value;
      let password = document.forms["loginForm"]["password"].value;
      if (!email || !password) {
        alert("Email and Password are required!");
        return false;
      }
    }
  </script>
</head>
<body>
  <h2>Login</h2>
  <!-- Login Form -->
  <form name="loginForm" action="process_login.php" method="post" onsubmit="return validateLogin()">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>