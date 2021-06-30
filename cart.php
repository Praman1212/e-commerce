<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppe</title>

    <!--BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!--Owl Carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    

    <!--FONTAWESOME CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!--CSS link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Start Header-->

    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-20 text-black-50 m-0">Online Sports Shopping Site</p>
        </div>

        <!--Primary Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="index.php">Sports Nepal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="comingsoon.php">Coming Soon</a>
                  </li>
              </ul>
              <!--Adding cart icon-->
              <form action="cart.php" class="font-size-14 font-rale">
                <?php
                    $count =0;
                    if(isset($_SESSION['cart']))
                    {
                    $count = count($_SESSION['cart']);
                    }
                ?>
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white">
                        <i class="fas fa-shopping-cart"></i>
                    </span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">
                    <?php echo $count; ?>
                    </span>
                  </a>
              </form>
            </div>
          </nav>
          <!--Primary Navigation End-->
    </header>
    <!-- Close Header-->

    <!-- Start main-site-->

    <div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light my-5">
				<h1>MY CART</h1>
			</div>
			<div class="col-lg-9">
				<table class="table">
				  <thead class="text-center">
				    <tr>
				      <th scope="col">Serial No.</th>
              <th scope="col">Image</th>
				      <th scope="col">Item Name</th>
				      <th scope="col">Item Price</th>
				      <th scope="col">Quantity</th>
              <th scope="col">Total</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  	<?php
            require('db.php');
				  	if (isset($_SESSION['cart'])) 
				  	{              
				  		foreach ($_SESSION['cart'] as $key => $value) 
				  		{
				  			$sr = $key + 1;
				  			echo "
					  			<tr>
						  			<td>$sr</td>
                    <td><img src='$value[Item_image]' width='25%'></td>
						  			<td>$value[Item_name]</td>
						  			<td>$value[price]<input type='hidden' class='iprice' value = '$value[price]'></td>
						  			<td><input class='text-center iquantity' onchange ='subTotal()'  type = 'number' value='$value[Quantity]' min='1' max='10'</td>
                    <td class ='itotal'></td>
						  			<td>
						  				<form action = 'manage_cart.php' method = 'POST'>
								  			<button class='btn btn-sm btn-outline-danger' name='Remove_Item'>REMOVE</button>
								  			<input type='hidden' name='Item_name' value='$value[Item_name]'>
								  		</form>
						  			</td>
					  			</tr>
				  		";
              }
            }
					?>
				  </tbody>
				</table>
			</div>
     
			<div class="col-lg-3">
				<div class="border bg-light rounded p-4">
					<h4 class="text-center">GRAND TOTAL:</h4>
				<h5 class="text-right" id = "gtotal">
				</h5>		  
				  
          <?php 
          if(isset($_SESSION['cart']))
          {
          if(isset($_REQUEST['submit']))
          {
            foreach($_SESSION['cart'] as $key => $value)
            {
             // items details in array
             $price = $value['price'];
             $name = $value['Item_name'];
             $image = $value['Item_image'];
             $quantity = $value['Quantity'];
             
             // Converting into JSON
             $myArr_name = array($name);
             $myJSON_name = json_encode($myArr_name);
             
             $myArr_image = array($image);
             $myJSON_image = json_encode($myArr_image);

             $myArr_price = array($price);
             $myJSON_price = json_encode($myArr_price);

             $myArr_quan = array($quantity);
             $myJSON_quan = json_encode($myArr_quan);
             

             $myArr = array("username"=>$_SESSION['name'],"name"=>$myJSON_name, "image"=>$myJSON_image, "price"=>$myJSON_price, "quantity"=>$myJSON_quan);            
          
                $query    = "INSERT into `cart` (username, item_image,item_name,item_price,quantity) VALUES ('$myArr[username]','$myArr[image]','$myArr[name]','$myArr[price]','$myArr[quantity]')";
                $result   = mysqli_query($con, $query);
              
              }  
              session_abort();            
          }
          ?>
              <form class = "form" action="" method = "post">
                <input type = "radio"  value = "Cash on Delivery" name = "Cash on Delivery" checked>
                <label for="cash on delivery">Cash On Delivery</label><br>
                <input class = "btn btn-primary" type = "submit" name = "submit" value = "Make Purchase">
              </form>
            <?php 
          ?>
          <?php
        }
        ?>
      </div>
      </div>
    <script>
    var gt = 0;
      var iprice = document.getElementsByClassName('iprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var itotal = document.getElementsByClassName('itotal');
      var gtotal = document.getElementById('gtotal');

      function subTotal()
      {
        gt =0;
        for(i=0; i<iprice.length; i++)
        {
          itotal[i].innerText = (iprice[i].value)*(iquantity[i].value); 
          gt = gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText = gt;
      }

      subTotal();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Addition of Js of Owl carousel-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!--JS ISOTOP CDN-->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
</body>
</html>