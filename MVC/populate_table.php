<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_app";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT id, no_hp, nama_pemilik FROM crud_table";
$result = $conn->query($sql);

// Output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='border border-black px-4 py-2 text-center'>" . $row["id"] . "</td>";
    echo "<td class='border border-black px-4 py-2 text-center'>" . $row["no_hp"] . "</td>";
    echo "<td class='border border-black px-4 py-2 text-center'>" . $row["nama_pemilik"] . "</td>";
    echo "<td class='border px-4 py-2 text-center'>";
    echo "<button class='edit-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Edit</button>";
    echo "</td>";
    echo "</tr>";
}

$conn->close();
?>
