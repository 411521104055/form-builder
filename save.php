<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO form_data (name, email, phone, message)
          VALUES ('$name', '$email', '$phone', '$message')";

if (mysqli_query($conn, $query)) {
    echo "Data saved successfully";
    echo "<br><a href='index.php'>Go Back</a>";
} else {
    echo "Error";
}
?>
