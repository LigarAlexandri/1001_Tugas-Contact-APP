<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Admin</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Style for sidebar */
        .sidebar {
            width: 175px;
        }
    </style>

  <title>Contact Management APP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7; /* Light gray background */
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle bottom shadow */
    }

    h1,
    h2 {
      text-align: center;
      color: #333; /* Darker text for headings */
    }

    h2 {
      margin-bottom: 15px; /* Add some space after headings */
    }

    form {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      border: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #eee; /* Light gray for table headers */
    }

    input[type="text"],
    input[type="submit"] {
      padding: 8px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50; /* Green for submit button */
      color: #fff; /* White text for submit button */
      cursor: pointer; /* Indicate clickable button */
    }
  </style>

</head>


<body class="bg-gray-200">

    <!-- Sidebar -->
    <div class="sidebar bg-gray-800 h-screen py-6 px-2 fixed top-0 left-0 shadow-md">
        <!-- Sidebar header -->
        <div class="text-white text-lg font-semibold mb-6 px-8">
            Ini Sidebar
        </div>

        <!-- Sidebar links -->
        <ul>
            <li class="mb-2">
                <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">
                    <i class="fas fa-users mr-2"></i> Pengguna
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="block text-gray-300 hover:text-white px-4 py-2">
                    <i class="fas fa-cog mr-2"></i> Settings
                </a>
            </li>
            <li class="mb-2">
                <a href="../index.html" class="block text-gray-300 hover:text-white px-4 py-2">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>


  <div class="container">
    <h1>Contact Management APP</h1>

    <h2>View Contacts</h2>
    <table>
      <tr>
        <th>Nomor</th>
        <th>Phone Number</th>
        <th>Owner</th>
      </tr>

      <?php
      // Include database connection MENGGUNAKAN ENV 
      require_once __DIR__ . '\..\Config\conn.php';

      // Query to fetch contacts
      $sql = "SELECT nomor, phone_number, owner FROM contactss";
      $result = $conn->query($sql);

      // Check if there are results
      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["nomor"] . "</td>";
          echo "<td>" . $row["phone_number"] . "</td>";
          echo "<td>" . $row["owner"] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='3'>0 results</td></tr>";
      }

      // Close database connection
      $conn->close();
      ?>
    </table>

    <div class="container flex justify-center">
  <!-- Create Contact -->
  <div class="mx-4">
    <h2 class="mb-2">Create Contact</h2>
    <form method="post" action="/src/Controller/Create.php" class="mb-4">
      <div class="flex flex-col mb-4">
        <label for="phone_number" class="mb-1">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" class="px-4 py-2 border rounded-md">
      </div>
      <div class="flex flex-col mb-4">
        <label for="owner" class="mb-1">Owner:</label>
        <input type="text" id="owner" name="owner" class="px-4 py-2 border rounded-md">
      </div>
      <input type="submit" name="submit" value="Submit" class="px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer">
    </form>
  </div>

  <!-- Update Contact, Anyway CRUD nya masih blm bisa buat jadi satu di model, jadi kupisahin -->
  <div class="mx-4">
    <h2 class="mb-2">Update Contact</h2> 
    <form method="post" action="/src/Controller/Update.php" class="mb-4">
      <div class="flex flex-col mb-4">
        <label for="update_id" class="mb-1">Nomor:</label>
        <input type="text" id="update_id" name="id" class="px-4 py-2 border rounded-md">
      </div>
      <div class="flex flex-col mb-4">
        <label for="update_phone_number" class="mb-1">Phone Number:</label>
        <input type="text" id="update_phone_number" name="phone_number" class="px-4 py-2 border rounded-md">
      </div>
      <div class="flex flex-col mb-4">
        <label for="update_owner" class="mb-1">Owner:</label>
        <input type="text" id="update_owner" name="owner" class="px-4 py-2 border rounded-md">
      </div>
      <input type="submit" name="update" value="Update" class="px-4 py-2 bg-blue-500 text-white rounded-md cursor-pointer">
    </form>
  </div>

  <!-- Delete Contact -->
  <div class="mx-4">
    <h2 class="mb-2">Delete Contact</h2>
    <form method="post" action="/src/Controller/Delete.php">
      <div class="flex flex-col mb-4">
        <label for="delete_id" class="mb-1">ID:</label>
        <input type="text" id="delete_id" name="id" class="px-4 py-2 border rounded-md">
      </div>
      <input type="submit" name="delete" value="Delete" class="px-4 py-2 bg-red-500 text-white rounded-md cursor-pointer">
    </form>
  </div>
  
</div>

</div>
</body>
</html>
