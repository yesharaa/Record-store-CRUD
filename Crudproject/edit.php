<<?php
include "config.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");

if (!$query) {
    die("Query failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
     <link rel="stylesheet" href="style3.css" />
</head>
<body>

    <div class="wrapper">
        <div class="form-wrapper">
        <h1>Edit User</h1>
        <form method="POST" action="action.php?id=<?= $user['id'] ?>">
        <input type="text" name="name" placeholder="Name" value="<?= $user['name'] ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" required>
        <input type="text" name="amounts" placeholder="Amounts" value="<?= $user['amounts'] ?>" required> 
        <textarea type="text" name="products" placeholder="Products" required><?= $user['products'] ?></textarea>
        <div class="btn-box">
            <button type="submit" name="update">Update</button>
            <a href="index.php" class="btn">Cancel</a>
        </div>
        </form>
    </div>
</div>

</body>
</html>