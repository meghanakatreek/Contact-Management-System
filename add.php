<?php
include 'db.php';
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO contacts (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">Add New Contact</h2>
    <form method="POST">
        <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="text" name="phone" class="form-control mb-3" placeholder="Phone" required>
        <textarea name="address" class="form-control mb-3" placeholder="Address" required></textarea>
        <button type="submit" class="btn btn-primary">Save Contact</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>