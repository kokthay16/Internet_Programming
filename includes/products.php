<div class='product col-md-9'>
    <?php

            $product = "select pro.*, ass.resource_path from products as pro join assets as ass on pro.id = ass.product_id where pro.category_id = $category";

            $items = run_query($product);                
        ?>
        <div class='row'>
            <?php
            foreach($items as $i):
                $discount = ((100-$i["discount"])*$i["price"])/100;  
            echo '

            <div class="col-md-4" style="width=100%;">
                <div class="boxProduct">
                    <a class="text-decoration-none" href="product.php?id='.$i['id'].'"> 
                        <div class="ImgProduct">
                            <img width="100%" src="'.$i["resource_path"].'">
                        </div>
                    <div class="discount">
                            <img width="70px" src="assets/img/icons/disscount.png">
                    </div>
                    <div class="infoProduct">
                        <div class="row">
                            <div style="float: left;">
                                '.$i["name"].'
                                </div>  
                        </div>
                        <div class="row">
                            <div style="float:left; width: 65%;">
                                <del style="color: red;">$'.$i["price"].'</del>
                                <p style="color: green;">'.$discount.'</p>                            
                            </div>
                            <div style="float: left;">
                                <button type="button" class="btn btn-outline-primary">
                                        <img src="assets/img/icons/cart.png" width="20px">Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>';
            endforeach; 
            ?>
        </div>
</div>