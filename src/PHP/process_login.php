<?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "contact_app"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
    // User exists, redirect to another HTML page
    header("Location: " . dirname($_SERVER['PHP_SELF']) . "/../sidebar.html"); // Redirects to sidebar.html in the parent directory
    exit();
} else {
    // User doesn't exist or credentials are incorrect
    echo "CREDENTIAL IS INVALID BANG.";
}


$conn->close();
?>
