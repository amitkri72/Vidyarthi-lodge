<?php
include("../db/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contact_queries (name, email, message)
          VALUES ('$name', '$email', '$message')";

mysqli_query($conn, $query);

echo "Thank you! Your message has been sent.";
?>
