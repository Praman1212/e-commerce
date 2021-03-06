<?php
    $link = mysqli_connect("localhost","root","");
    
    mysqli_select_db($link, "shopee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Add Product</title>
</head>
<body>
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Sports Nepal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>

     <form name = "form1" action="#" method = "post" enctype = "multipart/form-data" style = " background-color ;margin:20vh 10vh 10vh 10vh; height : 65vh; box-shadow: 4px 6px 8px black; border-radius: 5px; text-align: center">
     <p></p><br><br>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Product Brand</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm"  name = "item_brand" style = "width : 50%">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="colFormLabel"  name = "item_name" style = "width : 50%">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Product Price</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="colFormLabelLg"  name = "item_price" style = "width : 50%">
            </div>
        </div>
        <div class="form-group row">
            <label style = "margin-right:12vh;margin-left : 8vh;">Image Upload</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "item_image" style = "width : 40%">
        </div>
        <div class="form-group row">
            <label class="mr-sm-2" for="inlineFormCustomSelect" style = "margin-left : 8vh;">Category</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name = "sport_product" style = "width : 40%; margin-left: 14vh;" > 
                <option selected>Choose...</option>
                <option value="football">Football</option>
                <option value="volleyball">Volleyball</option>
                <option value="jersey">Jersey</option>
                <option value="basketball">Basketball</option>
                <option value="cricket">Cricket</option>
                <option value="ps4">PS4</option>
            </select>
    </div><br><br>
     <td colspan = "2">
        <button class = "btn btn-primary" name = "submit" style = "border: none; outline : none; border-bottom: 1px solid black ;border-radius:5px;transform:translate(-25vh,0vh);">Submit</button>
    </td>
</form>
<?php
if(isset($_POST["submit"])) 
{
    $v1 = rand(1111,9999);
    $v2 = rand(1111,9999);

    $v3 = $v1.$v2;
    $v3 = md5($v3);

    $brand = $_POST['item_brand'];
    $name =$_POST['item_name'];
    $price = $_POST['item_price'];
    $type = $_POST['sport_product'];
    
    $fnm = $_FILES["item_image"]["name"];
    $dst = "./product_img/" .$v3.$fnm;
    $dst1 = "product_img/" .$v3.$fnm;
    move_uploaded_file($_FILES["item_image"]["tmp_name"],$dst);

    mysqli_query($link, "INSERT INTO `product`( `item_brand`, `item_name`, `item_price`, `item_image`, `sport_product`) VALUES('$brand','$name','$price','$dst1','$type')");
}
?>
   
</body>
</html>