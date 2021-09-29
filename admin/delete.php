<?php
include 'conn.php';

$item_id = $_GET['item_id'];

$q = "DELETE from `product`  where item_id = $item_id";

mysqli_query($con,$q);

header('location:product.php');


?>