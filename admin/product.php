<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- <link media ="D:\Xamp\htdocs\ecommerce\assets"> -->
    <title>Sports Nepal</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Sports Nepal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="users.php">Users List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product.php">Product List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.php">Cart List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="additem.php">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Dashboard</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="modal fade" id = "deletemodal" tabindex = "-1" role = "dialog" aria-labrlledby = "exampleModalLabel" aria-hidden = "true">
                        <div class="modal-dialog" role = "document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class = "modal-title" id = "exampleModalLabel">
                                        Delete Users Data
                                    </h5>
                                    <button type ="button" class = "close" data-dismiss = "modal" aria-label = "Close">
                                        <span aria-hidden = "true">&times;</span>
                                    </button>
                                </div>
                                <form action = "#" method = "POST">
                                    <div class = "modal-body">
                                        <input type = "hidden" name = "delete_id" id= "delete_id">
                                        <h4> Do you want to Delete this Data ??</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type = "button" class ="btn btn-sceondary" data-dismiss ="modal" >NO</button>
                                        <button type = "submit" name = "deletedata" class = "btn btn-primary">Yes !! Delete it</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="ecommerce-widget">

                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-bordered">
                                                    <tr class = "text-white text-center">
                                                        <th class="border-0">Item Id</th>
                                                        <th class="border-0">Item Brand</th>
                                                        <th class="border-0">Item Name</th>
                                                        <th class="border-0">Item Price</th>
                                                        <th class="border-0">Item Image</th>
                                                        <th class="border-0">Item Type</th>
                                                        <th class="border-0">Delete</th>
                                                        <th class="border-0">Update</th>
                                                        <th class="border-0"><a href = "additem.php"><input type = "submit" class = "btn btn-primary" value = "Add Products"></a></th>
                                                    </tr>
                                                    <?php
                                                        include 'conn.php';

                                                        $q = "SELECT * FROM product";
                                                        
                                                        $query = mysqli_query($con,$q);

                                            while($res = mysqli_fetch_array($query))
                                            {           
                                                    ?>
                        
                                                    <tr>
                                                        <td class="border-0"><?php echo $res['item_id'] ?></th>
                                                        <td class="border-0"><?php echo $res['item_brand'] ?></th>
                                                        <td class="border-0"><?php echo $res['item_name'] ?></th>
                                                        <td class="border-0"><?php echo $res['item_price'] ?></th>
                                                        <?php
                                                        $curr_img=$res['item_image'];
                                                        $res_arr=array();
                                                       $res_arr=explode("/",$curr_img);                                                        
                                                         
                                                        
                                                        if ($res_arr[1]=="assets") {
                                                            print_r($res_arr[1]);
                                                             $a ="../assets/";
                                                             $b = $res_arr[2];
                                                             $c = $a.$b;
                                                             ?>
                                                             <td class="border-0"><img src = "<?php echo $c; ?>" style = "height:40px; width:40px;"/>
                                                             </td>
                                                       <?php } else { ?>
                                                            
                                                        <td class="border-0"><img src = "<?php echo $res['item_image'] ?>" style = "height:40px; width:40px;"></td>
                                                        
                                                        <?php } ?>
                                                        <td class="border-0"><?php echo $res['sport_product'] ?></th>
                                                        <td class="border-0"><button class = "btn-danger btn"><a href = "delete.php?item_id=<?php echo $res['item_id']; ?>" class = "text-white">Delete</a></button></th>
                                                        <td class="border-0"><button class = "btn-primary btn"><a href = "update.php?item_id=<?php echo $res['item_id']; ?>" class = "text-white">Update</a></button></th>
                                                       </tr>
                                        <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                                       </div>
                          
                        </section>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                           
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <script src = "documentation/js/index.js"></script>
</body>
 
</html>