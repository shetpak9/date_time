<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM producttb WHERE product_id = $id";

$conn->query($sql);
header("Location: index.php");