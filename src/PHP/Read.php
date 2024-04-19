<?php

$sql = "SELECT id, phone_number, owner FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Phone Number: " . $row["phone_number"]. " - Owner: " . $row["owner"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
