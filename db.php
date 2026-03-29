<?php
$conn = mysqli_connect("localhost", "root", "", "mycontacts");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>