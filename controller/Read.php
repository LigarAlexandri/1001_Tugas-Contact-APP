<?php

$sql = "SELECT nomor, phone_number, owner FROM contactss";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nomor: " . $row["nomor"]. " - Phone Number: " . $row["phone_number"]. " - Owner: " . $row["owner"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
