<div class="categories">
    <?php
        $categories = run_query("select * FROM categories ;"); 
        $c = $categories -> fetch_array(MYSQLI_NUM);
    
        foreach($categories as $cate):
            echo '
            <div class="row">
                
                    <form action="index.php" method="post">

                        <input type="hidden" name="category" value="'.$cate["id"].'" >
                            <button type="submit" class="StyleCategories btn btn-outline-light">
                            
                                <img style="width: 50px;" src="'.$cate["icon"].'">'.$cate["name"].'
                            
                            </button>
                    </form>
                
            </div>';
        endforeach;
    ?>

</div>