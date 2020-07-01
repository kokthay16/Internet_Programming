<?php
include "connection/config.php";
$category = "";
$keyword= "";
$product = "";

if(isset($_POST["category"])){
    $category = $_POST["category"];
    $product = "select * from products join assets on products.id = assets.product_id where products.category_id = $category";

}else{
    $category = 1;
}

// if(isset($_GET["category"])){
//     $category = $_GET["category"];
//     $product = "select * from products join assets on products.id = assets.product_id where products.category_id = $category";
// }

if(isset($_GET['search'])){
    $keyword = $_GET['search'];
    $product = "select * from products join assets on products.id = assets.product_id where products.category_id = '{$category}' AND name LIKE '%{$keyword}%';";
}

?>
<!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link rel='stylesheet' href='assets/css/custom.css'>
        <!-- JS, Popper.js, and jQuery -->
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js' integrity='sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI' crossorigin='anonymous'></script>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel='stylesheet' href='assets/css/custom.css'>
        <script src='assets/js/load-more-button.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>


    </head>
    <body>
        <?php
            include ('includes/nav_bar.php');
          
            $features = run_query("select * FROM features ;"); 
            $f = $features -> fetch_array(MYSQLI_NUM);

            include ('includes/feature.php');
            include 'includes/promotion.php';
            
        ?>
        <div class="row">
            <?php
                include 'includes/category.php';
                include 'includes/products.php';
            ?>
        </div>
    </body>