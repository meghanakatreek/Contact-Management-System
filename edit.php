<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id = $id");
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $sql = "UPDATE contacts SET name='$name', email='\( email', phone=' \)