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

  $new_name = "";
  $new_email = "";
  $new_password = "";
  $new_confirm_password = "";
  $massage = "";
  $username = "";
  $nav_name = "";
  $succ = "Please create account in my Shop";
  $sewsome_shop = "";
  

if(isset($_POST["submit_signup"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $en_password = md5($password);
  $confirm_password = $_POST["confirm_password"];   

    if($name!=NULL){
      if($email!=NULL){
        if($password!=NULL){
          if($confirm_password!=NULL){
            if($confirm_password == $password){

              $succ = "Sign up success";
              $sewsome_shop = "";

              $sql_users = "INSERT INTO users (  name,  email, password ) VALUE (  '$name','$email','$en_password')";  
              $user = $conn->query($sql_users);
              $sql_user = "SELECT name from users where id=(SELECT max(id) from users)";
              $user = $conn->query($sql_user);
              while($username = $user->fetch_assoc()) {
                $nav_name = $username["name"];}

            }else $massage = "*incorrect password";

          }else $new_confirm_password = "*confirm password";
            
      }else $new_password = "*input your password";
        
    }else $new_email = "*input your email";
      
  }else $new_name = "*input your name";

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
  <link rel="stylesheet" href="assets/css/custom.css">
  <script src="assets/js/style.js"></script>
  
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
    <h2 class="sign_text text-success" style="text-align: center;">Sign Up</h2>
    <p class="text-success sign_text" style="text-align: center;"><?php echo $succ;?></p>
    <p class="signup"><?php echo $new_name;?></p>
    <form action="" method="post"class="form">
        
            <div>
                <input type="text" name="name" value="<?php if(isset( $_POST["submit_signup"])){if($name==NULL){ $name = NULL;}else $name;}?>" class="form-control input-lg" placeholder="Name"></div>
        
        <p class="signup"><?php echo $new_email;?></p>
        <input type="email" name="email" value="<?php if(isset( $_POST["submit_signup"])){if($email==NULL){ $email = NULL;}else $email;}?>" class="form-control input-lg" placeholder="Your Email" require>
        <p class="signup"><?php echo $new_password;?></p>

<input type="password" name="password" value="<?php if(isset( $_POST["submit_signup"])){if($password==NULL){ $password = NULL;}else $password;}?>" class="form-control input-lg" placeholder="Password">
        <p class="signup"><?php echo $new_confirm_password;?><?php echo $massage;?></p>
        <input type="password" name="confirm_password" value="<?php if(isset( $_POST["submit_signup"])){if($confirm_password==NULL){ $confirm_password = NULL;}else $confirm_password;}?>" class="form-control input-lg" placeholder="Confirm Password"> 
        <br>
        <input class="btn btn-lg btn-primary btn-block signup-btn create" type="submit" name="submit_signup" value="Continue">
    </form>
    <br>
    <p class="sign_text">Already have an account? <a href="http://localhost/Assignment2/signin.php" class="singin">Sing in<a></p>
</div>
</body>
</html>