<?php
$conn = mysqli_connect("localhost", "root", "", "vidyarthi_lodge");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
