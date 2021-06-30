<?php 
session_start();
// session_destroy();

// Post Method
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	// Post vanne method ma Add_To_Cart name gareko kunai value xa bhane check garxa 
	if (isset($_POST['Add_To_Cart'])) 
	{
		// SESSION vanne method ma Cart name gareko kunai value xa bhane check garxa
		if(isset($_SESSION['cart']))
		{
			$myitems = array_column($_SESSION['cart'], 'Item_name');
			if (in_array($_POST['Item_name'], $myitems))
			{
				echo"
					<script>
					alert('Item Already Added');
					window.location.href = 'product.php';
					</script>
				";	
			}
			else
			{
			$count = count($_SESSION['cart']);
			$_SESSION['cart'][$count] = array('Item_image'=>$_POST['Item_image'],'Item_name'=>$_POST['Item_name'],'price'=>$_POST['price'],'Quantity'=>1);
			echo"
					<script>
					alert('Item Added');
					window.location.href = 'product.php';
					</script>
				";	
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('Item_image'=>$_POST['Item_image'],'Item_name'=>$_POST['Item_name'],'price'=>$_POST['price'],'Quantity'=>1);
			echo"
					<script>
					alert('Item Added');
					window.location.href = 'product.php';
					</script>
				";	
		}
	}
	if (isset($_POST['Remove_Item'])) 
	{
		foreach ($_SESSION['cart'] as $key=> $value )
		{
			if ($value['Item_name']==$_POST['Item_name']) 
			{
				echo"okay7";
			unset($_SESSION['cart'][$key]);
			$_SESSION['cart']=array_values($_SESSION['cart']);
			echo "<script>
			alert('Item Removed');
			window.location.href='cart.php';
			</script>
			";
			}
		}
	}
}
?>