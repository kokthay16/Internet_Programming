<?php 
    $cart = "signin.php";
    
    if(isset($_SESSION["name"])){
        $cart = "checkout.php";
}
?>
<?php
        $products = "select p.*, a.resource_path from products p join assets a on p.id = a.product_id where p.id= ".$_GET["id"];
                    $result = run_query($products);             
                   $i = mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
    <div class='row'>
        <?php
            
                $discount = ((100-$i["discount"])*$i["price"])/100;  
            echo '

            
                <div class="col-md-6">
                    <div class="row">
                        <div style="width: 100%;">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="'.$i["resource_path"].'" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="'.$i["resource_path"].'" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="'.$i["resource_path"].'" alt="Third slide">
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="discount" style="top: 0px; right: 15px;">
                            <img width="70px" src="assets/img/icons/disscount.png">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-md-4">
                            <img width="100%" src="'.$i["resource_path"].'" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img width="100%" src="'.$i["resource_path"].'" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img width="100%" src="'.$i["resource_path"].'" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="col-md-6"  style="padding-top: 10%;">
                    <div class="border border-primary rounded">
                        <div class="row" style="vertical-align: auto;">
                            <div style="float: left; ">
                                <h3 style="padding-left: 20px;">'.$i["name"].'</h3>
                                </div>  
                        </div>
                        <div class="row" style="bottom: 0px;">
                            
                            <div class="col-md-9" style="float: left;padding-left: 20px;">
                                <del style="color: red;">$'.$i["price"].'</del>
                                <p style="color: green;">'.$discount.'</p>                            
                            </div>
                            <div class="col-md-3" style="left: 0%;">
                                <a href="'.$cart.' ">
                                    <button type="button" class="btn btn-outline-primary">
                                        <img src="assets/img/icons/cart.png" width="20px">Cart
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
            ?>
    </div>