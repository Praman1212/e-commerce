warning: LF will be replaced by CRLF in admin/index.php.
The file will have its original line endings in your working directory
warning: LF will be replaced by CRLF in product.php.
The file will have its original line endings in your working directory
[1mdiff --git a/admin/admin.php b/admin/admin.php[m
[1mdeleted file mode 100644[m
[1mindex 5fc8911..0000000[m
[1m--- a/admin/admin.php[m
[1m+++ /dev/null[m
[36m@@ -1,17 +0,0 @@[m
[31m-<?php[m
[31m-[m
[31m-[m
[31m-// print_r($result['name']);[m
[31m-?>[m
[31m-[m
[31m-    [m
[31m-    <?php echo $row['email'] ?><br><br>[m
[31m-[m
[31m-[m
[31m-<?php while ($row = $results->fetch_assoc()) { ?>[m
[31m-    <?php echo $row['cart_id'] ?><br><br>[m
[31m-    <img src='$row[Item_image]' width='25%'><br><br>[m
[31m-    <?php echo $row['item_name'] ?><br><br>[m
[31m-    <?php echo $row['item_price'] ?><br><br>[m
[31m-    <?php echo $row['quantity'] ?><br><br>[m
[31m-<?php } ?>[m
\ No newline at end of file[m
[1mdiff --git a/admin/cart.php b/admin/cart.php[m
[1mindex c99125f..0ac5219 100644[m
[1m--- a/admin/cart.php[m
[1m+++ b/admin/cart.php[m
[36m@@ -11,9 +11,28 @@[m
     if ($conn->connect_error) {[m
         die("connetion failed:" . $conn->connect_error);[m
     }[m
[31m-    [m
     $sql = "SELECT * FROM cart ";[m
     $results = $conn->query($sql);[m
[32m+[m
[32m+[m[32m    if(isset($_POST['deletedata']))[m
[32m+[m[32m    {[m
[32m+[m[32m        $id = $_POST['delete_id'];[m
[32m+[m
[32m+[m[32m        $sql = "DELETE FROM cart WHERE cart_id = '$id'";[m
[32m+[m[32m        $resulte = $conn->query($sql);[m
[32m+[m[32m        echo gettype($resulte);[m
[32m+[m
[32m+[m[32m        if($results)[m
[32m+[m[32m        {[m
[32m+[m[32m            echo '<script> alert("Data Deleted"); </script>';[m
[32m+[m[32m            header("Location:cart.php");[m
[32m+[m[32m            // print_r($result);[m
[32m+[m[32m        }[m
[32m+[m[32m        else[m
[32m+[m[32m        {[m
[32m+[m[32m            echo '<script> alert("Data Not Deleted");</script>';[m
[32m+[m[32m        }[m
[32m+[m[32m    }[m
 ?>[m
 <!doctype html>[m
 <html lang="en">[m
[36m@@ -45,7 +64,7 @@[m
         <!-- ============================================================== -->[m
         <div class="dashboard-header">[m
             <nav class="navbar navbar-expand-lg bg-white fixed-top">[m
[31m-                <a class="navbar-brand" href="index.html">Concept</a>[m
[32m+[m[32m                <a class="navbar-brand" href="index.php">Sports Nepal</a>[m
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">[m
                     <span class="navbar-toggler-icon"></span>[m
                 </button>[m
[36m@@ -234,6 +253,32 @@[m
                     <!-- ============================================================== -->[m
                     <!-- end pageheader  -->[m
                     <!-- ============================================================== -->[m
[32m+[m[32m                    <div class="modal fade" id = "deletemodal" tabindex = "-1" role = "dialog" aria-labrlledby = "exampleModalLabel" aria-hidden = "true">[m
[32m+[m[32m                        <div class="modal-dialog" role = "document">[m
[32m+[m[32m                            <div class="modal-content">[m
[32m+[m[32m                                <div class="modal-header">[m
[32m+[m[32m                                    <h5 class = "modal-title" id = "exampleModalLabel">[m
[32m+[m[32m                                        Delete Cart Items[m
[32m+[m[32m                                    </h5>[m
[32m+[m[32m                                    <button type ="button" class = "close" data-dismiss = "modal" aria-label = "Close">[m
[32m+[m[32m                                        <span aria-hidden = "true">&times;</span>[m
[32m+[m[32m                                    </button>[m
[32m+[m[32m                                </div>[m
[32m+[m[32m                                <form action = "#" method = "POST">[m
[32m+[m[32m                                    <div class = "modal-body">[m
[32m+[m[32m                                        <input type = "hidden" name = "delete_id" id= "delete_id">[m
[32m+[m[32m                                        <h4> Do you want to Delete this Data ??</h4>[m
[32m+[m[32m                                    </div>[m
[32m+[m[32m                                    <div class="modal-footer">[m
[32m+[m[32m                                        <button type = "button" class ="btn btn-sceondary" data-dismiss ="modal" >NO</button>[m
[32m+[m[32m                                        <button type = "submit" name = "deletedata" class = "btn btn-primary">Yes !! Delete it</button>[m
[32m+[m[32m                                    </div>[m
[32m+[m[32m                                </form>[m
[32m+[m[32m                            </div>[m
[32m+[m[32m                        </div>[m
[32m+[m[32m                    </div>[m
[32m+[m
[32m+[m
                     <div class="ecommerce-widget">[m
 [m
                         <div class="row">[m
[36m@@ -264,12 +309,11 @@[m
                                                     <tr>[m
                                                         <td><?php echo $row['cart_id'] ?></td>[m
                                                         <td><?php echo $row['username'] ?></td>[m
[31m-                                                        <td><img src = "<?php echo $row['item_image'] ?>"></td>[m
[32m+[m[32m                                                        <td><img src = <?php echo $row['item_image'] ?>></td>[m
                                                         <td><?php echo $row['item_name'] ?></td>[m
                                                         <td><?php echo $row['quantity'] ?></td>[m
                                                         <td><?php echo $row['item_price'] ?></td>[m
[31m-                                                        <td><input type = "submit" class = "btn btn-danger" value ="Remove"></td>[m
[31m-[m
[32m+[m[32m                                                        <td><input type = "button" class = "btn btn-danger deletebtn" value ="Remove"></td>[m
                                                     </tr>[m
                                                 <?php } ?>[m
                                                 </tbody>[m
[36m@@ -323,6 +367,7 @@[m
     <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>[m
     <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>[m
     <script src="assets/libs/js/dashboard-ecommerce.js"></script>[m
[32m+[m[32m    <script src ="documentation/js/index.js"></script>[m
 </body>[m
  [m
 </html>[m
\ No newline at end of file[m
[1mdiff --git a/admin/dashboard-finance.html b/admin/dashboard-finance.html[m
[1mdeleted file mode 100644[m
[1mindex 73b503c..0000000[m
[1m--- a/admin/dashboard-finance.html[m
[1m+++ /dev/null[m
[36m@@ -1,829 +0,0 @@[m
[31m-<!doctype html>[m
[31m-<html lang="en">[m
[31m-[m
[31m-<head>[m
[31m-    <!-- Required meta tags -->[m
[31m-    <meta charset="utf-8">[m
[31m-    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">[m
[31m-    <!-- Bootstrap CSS -->[m
[31m-    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">[m
[31m-    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">[m
[31m-    <link rel="stylesheet" href="assets/libs/css/style.css">[m
[31m-    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">[m
[31m-    <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">[m
[31m-    <link href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">[m
[31m-    <link 