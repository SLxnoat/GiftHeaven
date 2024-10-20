<?php
// Database configuration
$host = 'localhost';  // Change if not running on localhost
$dbname = 'giftheaven_db';  // Database name
$user = 'root';  // Database username
$pass = '';  // Database password

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
