<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B - Menu</title>
    <link rel="stylesheet" type="text/css" href="nav_style.css">
    <link rel="stylesheet" type="text/css" href="menu_style.css">
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
            <li><a href="menu.php"><button type="button" class="button_menu">MENU</button></a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="#">MY ACCOUNT</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!--MENU-->

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
            </div>
        </div>
    </div>
    <a href="account.php" class="order">order now?</a>
    <div class="whitespace"></div>

    <script src="app.js"></script>
</body>
</html>