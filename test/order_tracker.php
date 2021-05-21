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
else if($_SESSION['id'] == 2){?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B - Order Tracker</title>
    <link rel="stylesheet" type="text/css" href="style/order_tracker_style.css">
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

    <!--Side bar-->
    <div class="sidebar">
        <h1>Hi Order Tracker!</h1>
        <a href="incoming_tracker.php">Incoming Order</a>
        <a href="current_tracker.php">Current Order</a>
        <a href="history_tracker.php">History of Orders</a>
        <a href="include/logout.php">Logout</a>
    </div>

    <div class="content">
        <div class="col">
            <h1>WINGS & BEERS</h1>
            <h2>CHICKEN JOINT</h2>
        </div>
        
        <div class="chicken">
            <img src="img/chicken.png" alt="chicken">
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php
}
else if($_SESSION['id'] > 2){
    header("Location: user_landing.php?error=restriction");
    exit();
}
else{
    header("Location: login.php?error=login");
    exit();
}
?>