<?php
// Establish database connection
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

// Process form submission
if(isset($_POST['submit'])) {
    $phone_number = $_POST['phone_number'];
    $owner = $_POST['owner'];
    
    $sql = "INSERT INTO contacts (phone_number, owner) VALUES ('$phone_number', '$owner')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
