<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='assets/css/custom.css'>
</head>
<body>

<?php include ('includes/nav_bar.php');?>
<p class="spacing"></p>

<div class="container check_size">
    <br>
    <h3 class="text-success Check"><b>CheckOut</b></h3>
    <br>
    <h5 class="text-success">3 items</h5>
    <hr>
    <div class = "row">
      <div class="col-md-3">
        <img src="../assets/img/products/Clothes/img-1.jpg" alt="" class="check_img">
      </div>
      <div class="col-md-7">
        <span><b>Dress and Jacket</b></span><br><br>
        <span class="text-success">$12</span> <br><br>
        <form action=""><input type="number" name="quantity" value="" min="1" max="5"></form>
      </div>
      <div class="col-md-2"><br><br><b>12$ &times;</b></div>
    </div>
    <hr>
    <div class = "row">
      <div class="col-md-3">
        <img src="../assets/img/products/Clothes/img-2.jpg" alt="" class="check_img">
      </div>
      <div class="col-md-7">
        <span><b>White T-shirt - Nike</b></span><br> <br>
        <span class="text-success">$12</span> <br><br>
        <form action=""><input type="number" name="quantity" min="1" max="5"></form>
      </div>
      <div class="col-md-2"><br><br><b>12$ &times;</b></div>
    </div>
    <hr>
    <div class = "row">
      <div class="col-md-3">
        <img src="../assets/img/products/Clothes/img-3.jpg" alt="" class="check_img">
      </div>
      <div class="col-md-7">
        <span><b>White T-shirt - Nike</b></span><br> <br>
        <span class="text-success">$12</span> <br><br>
        <form action=""><input type="number" name="quantity" min="1" max="5"></form>
      </div>
      <div class="col-md-2"><br><br><b>12$ &times;</b></div>
    </div> 
    <br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 checkout">
        <a href="">
          <div class="row">
            <div class="col-md-3 buy"><b>CheckOut</b></div>
            <div class="col-md-6"></div>
            <div class="col-md-3 price"><p class="price2">$30.50</p></div>
          </div>
        </a>
      </div>
      <div class="col-md-2"></div>
    </div>
    <br>

</div>
<p class="space"></p>

</body>
</html>