<?php
session_start();
if(empty($_SESSION['id'])){
    header("Location: login.php?error=login");
    exit();
}
else if($_SESSION['id'] == 1){
    header("Location: admin.php?error=restriction");
    exit();
}
else if($_SESSION['id'] == 2){
    header("Location: order_tracker.php?error=restriction");
    exit();
}
else if($_SESSION['id'] > 2){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B - Menu</title>
    <link rel="stylesheet" type="text/css" href="style/nav_s.css">
    <link rel="stylesheet" type="text/css" href="style/acc_menu_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/Logo.ico"/> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/Logo.png" class="logo" alt="logo">
        </div>

        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="login.php"><button type="button" class="button_acc">MY ACCOUNT</button></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--sidebar-->
    <div class="sidebar">
        <h1>Hi User!</h1>
        <a class = "acc" href="acc_menu.php">Menu</a>
        <a href="track_your_order.php">Track your order</a>
        <a href="history_user.php">Order History</a>
        <a class = "acc" href="include/get-user-account.php">Account Management</a>
        <a href="include/logout.php">Logout</a>
    </div>

    <!--MENU-->
    
    <form action="include/acc_menu_process.php" method="get">
    <div class="menu">
        <div class="heading">
            <h1>Our Menu</h1>
        </div>
        <div class="food-items">
            <img src="img/1.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Honey BBQ</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec1_qty" id="1" class="quantity" value="0">
                    <button class="btn2" type="button">+</button>
                </div> 
            </div>
        </div>

        <div class="food-items">
            <img src="img/2.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Honey Mustard</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec2_qty" id="2" class="quantity" value="0">
                    <button class="btn2" type="button">+</button>
                </div> 
            </div>
        </div>

        <div class="food-items">
            <img src="img/3.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Konkong Red</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec3_qty" id="3" class="quantity" value="0">
                    <button class="btn2" type="button">+</button>
                </div> 
            </div>
        </div>

        <div class="food-items">
            <img src="img/4.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Messy Mexican</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec4_qty" id="4" class="quantity" value="0">
                    <button class="btn2" type="button">+</button>
                </div> 
            </div>
        </div>

        <div class="food-items">
            <img src="img/5.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Mushroom Wings</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec5_qty" id="5" class="quantity" value="0">
                    <button class="btn2" type="button" >+</button>
                </div> 
            </div>
        </div>

        <div class="food-items">
            <img src="img/6.jpg" alt="">
            <div class="details">
                <div class="details-sub">
                    <h5>Salted Egg</h5>
                    <h5 class="price">Php 199.00</h5>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="inline">
                    <button class="btn" type="button">-</button>
                    <input type="text" name="ec6_qty" id="6" class="quantity" value="0">
                    <button class="btn2" type="button">+</button>
                </div> 
            </div>
        </div>
    </div>
    <button name="addtocart" class="order">add to cart</button>
    </form>
    <div class="whitespace"></div>
    <script src="acc_menu.js"></script>
    <script src="app.js"></script>
</body>
</html>

<?php
}
else{
    header("Location: login.php?error=login");
    exit();
}
?>

