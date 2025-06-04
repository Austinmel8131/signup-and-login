<?php
// Database connection settings
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'demo_db';

// Create a new database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>