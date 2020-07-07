<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awesome_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $massage = "";
  $new_email = "";
  $new_pass = "";
  $new_name = "";
  $succ = "Login with your email and password";
  $sewsome_shop = "";

  if(isset($_POST["continue"])){

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql_email = "SELECT DISTINCT email FROM users where users.email LIKE '{$email}' ";
    $check_email = $conn->query($sql_email);
    
    $sql_pass = "SELECT DISTINCT password FROM users where users.password LIKE '{$password}' ";
    $check_pass = $conn->query($sql_pass);

    $sql_name = "SELECT DISTINCT * FROM users where users.email LIKE '{$email}' AND users.password LIKE '{$password}'";
    $check_name = $conn->query($sql_name);

    while($name = $check_name->fetch_assoc()){
      $new_name = $name["name"];}


    while($compare_email = $check_email->fetch_assoc()){
      $new_email = $compare_email["email"];}

    while($compare_pass = $check_pass->fetch_assoc()){
      $new_pass = $compare_pass["password"];}

    if($new_email == $email){
      if($new_pass == $password){
        $new_name;
        $sewsome_shop = "";
        $succ = "Login success";
      }else $massage = "*Email or password is valid. Try again!!!";
    }else $massage = "*Email or password is valid. Try again!!!";

  
  
}

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
<div class="container">
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'></li>
            <a href='index.php'>
                <img class='ShopLogo' src='assets/img/logo.png'>
            </a>
            </li>
        </ul>
        <form class='form-inline my-2 my-lg-0'>
            <svg class='bi bi-question-circle-fill' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' '>
                    <path fill-rule='evenodd ' d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.57 6.033H5.25C5.22 4.147 6.68 3.5 8.006 3.5c1.397 0 2.673.73 2.673 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.355H7.117l-.007-.463c-.038-.927.495-1.498
                1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.901 0-1.358.603-1.358 1.384zm1.251 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z '/>
            </svg>
                <a class='nav-link disabled ' href='# '>Need Help</a>
            </form>
        </nav>
</div>
<br>
<div class="container form_sign" style="width: 30%">
    <h2 class="sign_text text-success" style="text-align: center;">Welcome Back</h2>
    <p class="text-success sign_text" style="text-align: center;"><?php echo $succ;?></p>
    <br>
    <p style="color: red;"><?php if(isset($_POST["continue"])){echo $massage;}?></p>
    <form action="" class="form" method="POST">
        <input type="text" name="email" value="<?php if(isset($_POST["continue"])){echo $email;}?>" class="form-control input-lg" placeholder="Email">
        <p></p>
        <input type="password" name="password" value="<?php if(isset($_POST["continue"])){$password;}?>" class="form-control input-lg" placeholder="Password">
        <br>
        <br>
        <input class="btn btn-lg btn-success btn-block signup-btn create" type="submit" name="continue" value="Login">
    </form>
    <br>
    <p class="sign_text">Don't have any account? <a href="http://localhost/Assignment2/signup.php" class="singin">Sing up<a></p>

</div>
</body>
</html>