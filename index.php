<?php
include("auth_session.php"); 
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopee";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("connetion failed:" . $conn->connect_error);
}
$sql = "SELECT * FROM product WHERE sport_product='jersey'";
$result = $conn->query($sql);

$sql = "SELECT * FROM product WHERE sport_product = 'ps4'";
$results = $conn->query($sql);

$sql = "SELECT * FROM product WHERE sport_product = 'football'";
$resultf = $conn->query($sql);

$sql = "SELECT * FROM product WHERE sport_product = 'basketball'";
$resultb = $conn->query($sql);

$sql = "SELECT * FROM product WHERE sport_product = 'cricket'";
$resultc = $conn->query($sql);

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
            <div class="font-rale font-size-14">
                <p class="px-3 border-right border-left text-dark">Welcome <?php echo $_SESSION['name']; ?></p>
            </div>
            <div class="font-rale font-size-14">
                <a href="logout.php" class="px-3 border-right border-left text-dark">
                    Logout
                </a>
            </div>
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

    <main id="main-site">

        <!--Owl Carsousel Start-->

        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="items">
                    <img src="./assets/design.jpg" alt="banner">
                </div>
                <div class="items">
                    <img src="./assets/light.jpg" alt="banner">
                </div>
                <div class="items">
                    <img src="./assets/Technology.jpg " alt="banner">
                </div>
            </div>
        </section>

        <!--Owl Carousel End-->

        <!--Top Sale Start-->

        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">
                    Top Sale
                </h4>
                <hr>

                <!--Owl Carousel start-->


                <div class="owl-carousel owl-theme" id="owl-theme">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <form action="manage_cart.php" method="POST">
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="product.php?id=<?php echo $row['item_id']; ?>">
                                        <img src= <?php echo $row['item_image'] ?> alt="product" class="img-fluid" >
                                    </a>
                                    <div class="text-center">
                                        <h6>
                                            <?php echo $row['item_name'] ?>
                                        </h6>
                                        <div class="rating text-warning font-size-12">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        </div>
                                        <div class="price py-2">
                                            <span><?php echo 'Rs ' . $row['item_price'] ?></span>
                                        </div>
                                        <!-- Connect with name -->
                                        <input type="hidden" name="Item_image" value="<?php echo $row['item_image']; ?>">
                                        <input type="hidden" name="Item_name" value="<?php echo $row['item_name']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['item_price']; ?>">

                                        <!-- Add To cart button\\\ -->
                                        <button type="submit" name="Add_To_Cart" class="btn btn-warning font-size-12">Add to Cart
                                        </button>

                                        <!-- Cart Added Icon -->

                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
                <!--Owl Carousel end-->

            </div>

        </section>

        <!--Top Sale End-->


        <!--Specail Price Section Start-->

        <section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-right font-baloon font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
                    <button class="btn" data-filter=".Football">Football</button>
                    <button class="btn" data-filter=".Basketball">Basketball</button>
                    <button class="btn" data-filter=".Cricket">Cricket</button>
                </div>

                <!--Grid-->
                <div class="grid">
                    <?php while ($row = $resultf->fetch_assoc()) { ?>
                        <form action="manage_cart.php" method="POST">
                            <div class="grid-item Football border">
                                <div class="item py-2" style="width: 200px;">
                                    <div class="product font-rale">
                                        <a href="product.php?id=<?php echo $row['item_id']; ?>">
                                            <<?php
                                                        $curr_img=$row['item_image'];
                                                        $row_arr=array();
                                                       $row_arr=explode("/",$curr_img);                                                        
                                                         
                                                        
                                                        if ($row_arr[1]=="product_img") {
                                                        
                                                             $a ="../product_img/";
                                                             $b = $row_arr[2];
                                                             $c = $a.$b;
                                                             ?>
                                                             <td class="border-0"><img src = "<?php echo $c; ?>" style = "height:40px; width:40px;"/>
                                                             </td>
                                                       <?php } else { ?>
                                                            
                                                        <td class="border-0"><img src = "<?php echo $row['item_image'] ?>" style = "height:40px; width:40px;"></td>
                                                        
                                                        <?php } ?>
                                        </a>
                                        <div class="text-center">
                                            <h6>
                                            <?php echo $row['item_name'] ?>
                                            </h6>
                                            <div class="rating text-warning font-size-12">
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <div class="price py-2">
                                                <span><?php echo 'Rs ' . $row['item_price'] ?></span>
                                            </div>
                                            <input type="hidden" name="Item_image" value="<?php echo $row['item_image']; ?>">
                                            <input type="hidden" name="Item_name" value="<?php echo $row['item_name']; ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['item_price']; ?>">
                                            <button type="submit" name="Add_To_Cart" class="btn btn-warning font-size-12">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                    <?php while ($row = $resultb->fetch_assoc()) { ?>
                        <form action="manage_cart.php" method="POST">
                            <div class="grid-item Basketball border">
                                <div class="item py-2" style="width: 200px;">
                                    <div class="product font-rale">
                                        <a href="product.php?id=<?php echo $row['item_id']; ?>">
                                            <img src="<?php echo $row['item_image'] ?>" alt="product" class="img-fluid"  style = "height:20vh">
                                        </a>
                                        <div class="text-center">
                                            <h6>
                                            <?php echo $row['item_name'] ?>
                                            </h6>
                                            <div class="rating text-warning font-size-12">
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <div class="price py-2">
                                                <span><?php echo 'Rs ' . $row['item_price'] ?></span>
                                            </div>
                                        <input type="hidden" name="Item_image" value="<?php echo $row['item_image']; ?>">
                                        <input type="hidden" name="Item_name" value="<?php echo $row['item_name']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['item_price']; ?>">

                                        <button type="submit" name="Add_To_Cart" class="btn btn-warning font-size-12">Add to Cart
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                    <?php while ($row = $resultc->fetch_assoc()) { ?>
                        <form action="manage_cart.php" method="POST">
                            <div class="grid-item Cricket border">
                                <div class="item py-2" style="width: 200px;">
                                    <div class="product font-rale">
                                        <a href="product.php?id=<?php echo $row['item_id']; ?>">
                                            <img src="<?php echo $row['item_image'] ?>" alt="product" class="img-fluid"  style = "height:20vh">
                                        </a>
                                        <div class="text-center">
                                            <h6>
                                            <?php echo $row['item_name'] ?>
                                            </h6>
                                            <div class="rating text-warning font-size-12">
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                                <span>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </div>
                                            <div class="price py-2">
                                                <span><?php echo 'Rs ' . $row['item_price'] ?></span>
                                            </div>
                                        <input type="hidden" name="Item_image" value="<?php echo $row['item_image']; ?>">
                                        <input type="hidden" name="Item_name" value="<?php echo $row['item_name']; ?>">
                                        <input type="hidden" name="price" value="<?php echo $row['item_price']; ?>">

                                        <button type="submit" name="Add_To_Cart" class="btn btn-warning font-size-12">Add to Cart
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>                   
                </div>
            </div>
        </section>

        <!--Specail Price Section End-->

        <!--Banner Ads Start-->

        <section id="banner_adds">
            <div class="container py-5">
                <img src="./assets/advert1.jfif" alt="" class="img-flui" style="width: 42%; margin-right: 10vh;">
                <img src="./assets/advert2.jpg" alt="" class="img-fluid">
            </div>
        </section>

        <!--Banner Ads End-->

        <!--PS4 Items Start-->

        <section id="PS4">
            <div class="container">
                <h4 class="font-rubik font-size-20">
                    PS4
                </h4>
                <hr>
                <!--PS4 carousel Start-->

                <div class="owl-carousel owl-theme" id="PS4">
                    <?php while ($row = $results->fetch_assoc()) { ?>
                        <form action="manage_cart.php" method="POST">
                        <div class="item py-2 bg-light" style = "padding:0 5px">
                            <div class="product font-rale">
                                <a href="product.php?id=<?php echo $row['item_id']; ?>">
                                    <img src=<?php echo $row['item_image'] ?> alt="product" class="img-fluid"  style = "height:22vh; width:100%" >
                                </a>
                                <div class="text-center">
                                    <h6>
                                        <?php echo $row['item_name'] ?>
                                    </h6>
                                    <div class="rating text-warning font-size-12">
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>
                                            <i class="far fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="price py-2">
                                        <span><?php echo 'Rs ' . $row['item_price'] ?></span>
                                    </div>
                                    <input type="hidden" name="Item_image" value="<?php echo $row['item_image']; ?>">
                                    <input type="hidden" name="Item_name" value="<?php echo $row['item_name']; ?>">
                                    <input type="hidden" name="price" value="<?php echo $row['item_price']; ?>">

                                    <button type="submit" name="Add_To_Cart" class="btn btn-warning font-size-12">Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    <?php } ?>
                </div>

                <!--PS4 carousel End-->

            </div>
        </section>

        <!--PS4 Items End-->


        <!--Blog section start-->

        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Items</h5>
                            <img src="./assets/blog.png" alt="" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officia soluta fuga explicabo accusantium commodi! Omnis sapiente odit deserunt animi.</p>
                            <a href="#" class="color-second text-left"> Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Items</h5>
                            <img src="./assets/blog1.jpg" alt="" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officia soluta fuga explicabo accusantium commodi! Omnis sapiente odit deserunt animi.</p>
                            <a href="#" class="color-second text-left"> Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Items</h5>
                            <img src="./assets/blog2.jpg" alt="" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officia soluta fuga explicabo accusantium commodi! Omnis sapiente odit deserunt animi.</p>
                            <a href="#" class="color-second text-left"> Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog section End-->

    </main>

    <!--End main-site-->

    <!--Start footer-->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Sports Nepal</h4>
                    <p class="font-size-14 font-rale text-white-50"> Description on Sports Nepal </p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newslatter</h4>
                    <form class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email *">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2"> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Condition</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4 class="font-rubik font-size-20">Accounts</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy Copyright 2020. Desing By <a href="#" class="color-second"> Sports Nepal</a></p>
    </div>
    <!--End footer-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Addition of Js of Owl carousel-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!--JS ISOTOP CDN-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    
    <script>
        console.log('thik xa ');
        var cart = {}

        function add(id) {
            var x = document.getElementById('btn' + id);
            var y = document.getElementById('sbtn' + id);
            console.log(x);
            if (y.style.display === "none") {
                y.style.display = "block";
                x.style.display = "none"

            } else {
                y.style.display = "none"
                x.style.display = "block"
                cart['btn' + id] = 1;

            }
        }
    </script>
    <script>
        console.log('thik xa 2 ');
        var carts = {}

        function adds(id) {
            var p = document.getElementById('btn' + id);
            var q = document.getElementById('sbtn' + id);
            console.log(p);
            if (q.style.display === "none") {
                q.style.display = "block";
                p.style.display = "none"

            } else {
                q.style.display = "none"
                p.style.display = "block"
                cart['btn' + id] = 1;

            }
        }
    </script>
    <!--Addition of JavaScript-->
    <script src="./index.js"></script>
    

</body>
</html>