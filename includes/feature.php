
            <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                    <?php
                    $count = 0;
                    foreach($features as $feature):
                        if($count == 0){
                                    echo '
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="'.$feature["image"].'">
                    </div>
                        '; } else{ echo '
                    <div class="carousel-item">
                        <img class="d-block w-100" src="'.$feature["image"].'">
                    </div>
                        '; } $count++; endforeach; ?>
                    <div class='carousel-caption d-none d-md-block'>
                        <h1 class='text-success'>
                            <?php echo $f['1'];?>
                        </h1>
                        <div class="main">
                            <div class="form-group has-search">
                                <span class="fa fa-search form-control-feedback"></span>
                                <form action="index.php" method="GET">
                                    <input type="hidden" name="category" value="<?php echo $category;?>">
                                    <input class="form-control" name="search" value="<?php echo $keyword;?>" type='text' placeholder='Search' aria-label='Search'>

                                </form>
                            </div>
                        </div>
                    </div>
            </div>
                <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
        </div>
    