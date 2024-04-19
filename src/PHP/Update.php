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
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $phone_number = $_POST['phone_number'];
    $owner = $_POST['owner'];

    $sql = "UPDATE contacts SET phone_number='$phone_number', owner='$owner' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
