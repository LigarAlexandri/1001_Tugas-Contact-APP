<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact List</title>
</head>
<body>
    <h1>Contact List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Phone Number</th>
            <th>Owner's Name</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?php echo $contact['id']; ?></td>
            <td><?php echo $contact['no_hp']; ?></td>
            <td><?php echo $contact['nama_pemilik']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
