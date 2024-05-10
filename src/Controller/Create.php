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
    
    // Get the current maximum value of nomor
    $sql_max_nomor = "SELECT MAX(nomor) AS max_nomor FROM contactss";
    $result_max_nomor = $conn->query($sql_max_nomor);
    $row_max_nomor = $result_max_nomor->fetch_assoc();
    $max_nomor = $row_max_nomor['max_nomor'];

    // Increment the maximum value of nomor
    $next_nomor = $max_nomor + 1;

    // Insert the new contact with the incremented nomor
    $sql = "INSERT INTO contactss (nomor, phone_number, owner) VALUES ('$next_nomor', '$phone_number', '$owner')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
