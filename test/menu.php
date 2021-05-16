<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W&B - Menu</title>
    <link rel="stylesheet" type="text/css" href="menu1.css">
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

    <h1>Our Menu</h1>
    <div class="menu">
        <img src="img/1.jpg" class="prod" alt="">
        <img src="img/2.jpg" class="prod" alt="">
        <img src="img/3.jpg" class="prod" alt="">
        <img src="img/4.jpg" class="prod" alt="">
        <img src="img/5.jpg" class="prod" alt="">
        <img src="img/6.jpg" class="prod" alt="">
    </div>

    <a href="account.php" class="order">order now?</a>

    <div class="whitespace"></div>
    <script src="app.js"></script>
</body>
</html>