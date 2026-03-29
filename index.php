<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary">Contact Management System</h1>
    <p class="text-end"><a href="add.php" class="btn btn-success btn-lg">+ Add New Contact</a></p>

    <table class="table table-bordered table-hover shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contacts ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Delete?\")'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center py-5'>No contacts found. Add your first contact!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>