<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
     <link rel="stylesheet" href="style3.css" />
</head>
<body>

    <div class="wrapper">
        <div class="form-wrapper">
        <h1>Add User</h1>
        <form method="POST" action="action.php">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="amounts" placeholder="Amounts" required> 
        <textarea type="text" name="products" placeholder="Products" required></textarea>
        <div class="btn-box">
            <button type="submit" name="add">Add User</button>
            <a href="index.php" class="btn">Cancel</a>
        </div>
        </form>
    </div>
</div>

</body>
</html>