<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM form_data");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
        }

        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>

<body>

<h2 style="text-align:center;">Submitted Form Data</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['message']; ?></td>
    </tr>
    <?php } ?>
</table>

<a href="index.php">Back to Form</a>

</body>
</html>
