<?php 
    $nav_name = '<a href="signin.php"><button type="button" class="btn btn-secondary">Join</button></a>' ;
    session_start();
    if(isset($_SESSION["name"])){
    $nav_name = $_SESSION["name"];
    $checkout = "checkout.php";
}
?>


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
                <?php echo $nav_name;?>
                
            </form>
        </nav>