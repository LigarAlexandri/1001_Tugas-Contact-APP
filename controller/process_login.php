<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize user input to prevent SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query to check if user exists with provided credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists, redirect to PHP/index.php
    header("Location: ../View/index.php");
    exit();
} else {
    // User doesn't exist or credentials are incorrect
    echo "CREDENTIAL IS INVALID BANG.";
}

$conn->close();
?>
