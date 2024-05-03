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

// Process form submission (CREATE)
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

//Process Form Submission (READ)

$sql = "SELECT nomor, phone_number, owner FROM contactss";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nomor: " . $row["nomor"]. " - Phone Number: " . $row["phone_number"]. " - Owner: " . $row["owner"]. "<br>";
    }
} else {
    echo "0 results";
}

// Process form submission (UPDATE)
if(isset($_POST['update'])) {
    $nomor = $_POST['nomor'];
    $phone_number = $_POST['phone_number'];
    $owner = $_POST['owner'];

    $sql = "UPDATE contacts SET phone_number='$phone_number', owner='$owner' WHERE nomor=$nomor";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


// Process form submission (DELETE)
if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM contacts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
