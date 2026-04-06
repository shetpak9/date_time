<?php
require 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM producttb WHERE product_id = '$id'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<h2>EDIT PRODUCT</h2>
<form method="POST" action="">
    Product Name: <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>
    Category: <input type="text" name="category" value="<?php echo $row['category']; ?>" required><br>
    Price: <input type="number" name="price" value="<?php echo $row['price']; ?>" required><br>
    Quantity: <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
    <button type="submit" name="update">Update Product</button>
</form>
<?php
if(isset($_POST['update'])) {
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE producttb SET product_name='$product_name', category='$category', price='$price', quantity='$quantity' WHERE product_id='$id'";
    
    if($conn->query($sql) === TRUE) {
        echo "Product updated successfully.";
        header("Location: index.php");
        exit();
    } 
}

?>