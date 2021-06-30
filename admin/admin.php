<?php


// print_r($result['name']);
?>

    
    <?php echo $row['email'] ?><br><br>


<?php while ($row = $results->fetch_assoc()) { ?>
    <?php echo $row['cart_id'] ?><br><br>
    <img src='$row[Item_image]' width='25%'><br><br>
    <?php echo $row['item_name'] ?><br><br>
    <?php echo $row['item_price'] ?><br><br>
    <?php echo $row['quantity'] ?><br><br>
<?php } ?>