<?php
require 'config.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM producttb where product_name='$search' or category='$search'";
    $result = $conn->query($sql);
    $result->fetch_assoc();
}
?>
<form method="GET" action="">
    <input type="text" name="search" placeholder="Search product or Category">
    <button type="submit">Search</button>
</form>