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
                    <a class="nav-link" href="#">Coming Soon</a>
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
                    <a class="nav-link" href="#">Coming Soon</a>
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

    <!--Start footer-->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Sport Shopee</h4>
                    <p class="font-size-14 font-rale text-white-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae hic sed dolorum, quod doloribus aut? Tenetur nemo est dignissimos laboriosam maiores cum possimus impedit temporibus adipisci voluptatum? Eveniet, quis aliquid.</p>
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
                <div class="col-lg-2 col-12" >
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Termss & Condition</a>
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
    <!-- End footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Addition of Js of Owl carousel-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!--JS ISOTOP CDN-->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>


    <!--Addition of JavaScript-->
    <!-- <script src="./index.js"></script> -->
    <!-- <script> 
    $(document).ready(function(){
        function load_product(){
            $.ajax({
                url:"fetch_item.php",
                method:"POST",
                success:function(data){
                    $('#display_item').html(data);
                }
            })
        }
    });
    </script> -->
</body>
</html>