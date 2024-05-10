<?php
require_once 'src/Config/conn.php';

// Check if a specific method is requested
if(isset($_POST['method'])) {
    $method = $_POST['method'];
    
    // Execute the requested method
    switch ($method) {
        case 'create':
            createContact();
            break;
        case 'read':
            readContacts();
            break;
        case 'update':
            updateContact();
            break;
        case 'delete':
            deleteContact();
            break;
        default:
            echo "Invalid method specified";
    }
}

function createContact() {

    global $conn; // Access the database connection within the function
    
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
}

function readContacts() {
    global $conn; // Access the database connection within the function
    
    $sql = "SELECT nomor, phone_number, owner FROM contactss";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Nomor: " . $row["nomor"]. " - Phone Number: " . $row["phone_number"]. " - Owner: " . $row["owner"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

function updateContact() {
    global $conn; // Access the database connection within the function
    
    if(isset($_POST['update'])) {
        $nomor = $_POST['nomor'];
        $phone_number = $_POST['phone_number'];
        $owner = $_POST['owner'];

        $sql = "UPDATE contactss SET phone_number='$phone_number', owner='$owner' WHERE nomor=$nomor";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

function deleteContact() {
    global $conn; // Access the database connection within the function
    
    if(isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM contactss WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
