<?php

include "config.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amounts = $_POST['amounts'];
    $products = $_POST['products'];

   mysqli_query($conn, "INSERT INTO users (name, email, amounts, products) 
                        VALUES ('$name', '$email', '$amounts', '$products')");
   header("Location: index.php");
    exit;
};


if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amounts = $_POST['amounts'];
    $products = $_POST['products'];

   mysqli_query($conn, "UPDATE users 
                        SET name='$name', email='$email', amounts='$amounts', products='$products' WHERE id=$id");
   header("Location: index.php");
    exit;
};

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
   mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    header("Location: index.php");
    exit;
};