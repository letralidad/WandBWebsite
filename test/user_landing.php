<?php
session_start();
if(empty($_SESSION['id'])){
    header("Location: login.php?error=click");
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
    <title>
        W&B - Welcome User!
    </title>
    <link rel="stylesheet" type="text/css" href="style/user_landing_style.css">
    <link rel="stylesheet" type="text/css" href="style/nav_s.css">
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
            <li><a href="#"><button type="button" class="button_account">MY ACCOUNT</button></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--Container-->
    <div class="container">
        <div class="order_now">
            <h3>Order the food you love</h3>
            <a href="acc_menu.php"><h4>order now &#8594;</h4></a>
            </div>

        <div class="track">
            <h3>Track your order here!</h3>
            <a href="track_your_order.php"><h4>view your order&#8594;</h4></a>
        </div>

        <div class="history">
            <h3>Order History</h3>
            <a href="history_user.php"><h4>check here &#8594;</h4></a>
        </div>

        <div class="account_management">
            <h3>Manage your account</h3>
            <a href="include/get-user-account.php""><h4>manage here &#8594;</h4></a>
            
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php
}
else{
    header("Location: login.php?error=click");
    exit();
}
?>