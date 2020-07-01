<?php
        // $con = mysqli_connect('localhost', 'root', '', 'awesome_shop');
        $con = mysqli_connect('sql12.freemysqlhosting.net', 'sql12351578', 'bP4Ek227RE', 'sql12351578');
        date_default_timezone_set('Asia/Phnom_Penh');
    ?>

    <?php

        
            If (isset($_POST['submit'])) {
                
                $date = $_POST['date'];
                $comment = $_POST['comment'];
                $pro_id = $_POST['pro_id'];
            

                $sql = "INSERT INTO reviews (content,written_at, product_id) VALUE ('$comment','$date', '$pro_id')";
                $result = $con ->query($sql);
            }

    ?>

        <?php
                $sql = "Select * From reviews join products where product_id = products.id order by written_at DESC";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
         ?>

            <?php
            echo '
                <h1>Comments</h1>';
                
            while ($row = $result->fetch_assoc()) {
            echo '
                    
                    <div class="border border-success">
                        <img>
                        <div>
                            <h5>Anonymous</h5>
                            '.$row['written_at'].'<br>
                            '.$row['content'].'<br>
                        </div>
                    </div>
                        <br>';
                        
                        
                        
            }
            ?>
            <form style="width: 100%;" action="" method="POST">
                <div style="width: 100;">
                    <input type="hidden" name="date" value=<?php echo"date('Y-m-d H:i:s')"?>>
                    <input type="hidden"  name="pro_id" value=<?php echo'"$_GET["id"]" '?>>
                    <textarea name="comment" id="comment" class="form-control" style="width: 100%;" rows="5" placeholder="Write your comment here..."></textarea>
                </div>
                <div style="padding-top: 10px; float: right;">
                    <button type="submit" class = "btn btn-outline-success" name="submit" value="Send"> Send</button>
                    <button type="reset" class = "btn btn-outline-secondary" value="Discard"> Discard</button>
                </div>
            </form>


            
        