<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "awesome_shop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

    date_default_timezone_set('Asia/Phnom_Penh');

  if(isset($_POST["submit22"])){

    $comment = $_POST["comment"];
    $date = $_POST["date"];
    $product_id = $_POST["product_id"];
    
    //Insert comment to database
    
    $sql_reviews = "INSERT INTO reviews (  content,  written_at, product_id ) VALUE (  '$comment','$date','$product_id')";
    $reviews = $conn->query($sql_reviews);}
     
    //Get product.id = reviews.prodcut_id 

    $sql_review = "SELECT * FROM reviews JOIN products WHERE reviews.product_id = products.id order by written_at DESC";
    $review = $conn->query($sql_review);
  
    $product_id = $_GET["id"];
    $sql_comment = "SELECT * FROM reviews JOIN products WHERE reviews.product_id = {$product_id} HAVING reviews.product_id = products.id order by written_at DESC";
    $comment = $conn->query($sql_comment);
  
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="row">
            <h2>Comments</h2>
            <div>

                <?php if(isset($product_id)){?>
                <div>
                    <?php while($com = $comment->fetch_assoc()){ ?>
                    <div style="padding-top: 10px;">
                        <div class="rounded-right border border-success" style="height: auto; padding-left: 5px;">

                            <?php echo $com["written_at"]?>
                            <br/>
                            <?php echo $com["content"]?>
                        </div>
                    </div>

                    <?php }?>
                </div>
                <?php }?>


                <?php
              echo '
              
                <div style="padding-top: 10px">
                    <form method="POST">
                    <div>
                        <input type="hidden" width="100%" name="date" value="'.date('Y-m-d H:i:s').'">
                        <input type="hidden" width="100%" name="product_id" value=" '.$_GET['id'].' "> 
                        <textarea name="comment" style="width: 100%;" rows="4" cols="100%" placeholder="Write you commant here!!" class="rounded border border-dark"></textarea><br>  
                    </div>
                    <div style="float: right;">
                        <input class="btn btn-primary" type="submit" value="Send" name="submit22">
                        <input class="btn btn-secondary" type="reset" value="Discard" name="discard">
                    </div>
                    </form>
                </div>
          </div>';
          ?>
            </div>
            <br/>
            <br/>
    </body>

    </html>