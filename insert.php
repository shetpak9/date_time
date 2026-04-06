<?php
require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {

    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO producttb (product_id, product_name, category, price, quantity) VALUES ('$id', '$product_name', '$category', '$price', '$quantity')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully";
        header("Location: index.php");
        exit();
    }
}