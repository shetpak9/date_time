<?php
require 'config.php';

$sql = "SELECT * FROM producttb";
$result = $conn->query($sql);
$result->fetch_assoc();

require_once 'search.php';
?>
<h2>PRODUCT LIST</h2>
<table>
    <tr>
        <th>Product Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>
    <?php
        foreach($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['product_id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['product_id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<br><br>
<h2>ADD NEW PRODUCT</h2>
<form method="POST" action="insert.php" >
    ID: <input type="number" name="id" required><br>
    Product Name: <input type="text" name="product_name" required><br>
    Category: <input type="text" name="category" required><br>
    Price: <input type="number" name="price" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    <button type="submit" name="add">Add Product</button>
</form>

