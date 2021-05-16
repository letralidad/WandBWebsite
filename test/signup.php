<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W&B</title>
    <link rel="stylesheet" type="text/css" href="nav_style.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
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
            <li><a href="login.php"><button type="button" class="button_home">MY ACCOUNT</button></a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <!-- sign up form -->
    <div class="contentBox">
        <div class="formBox">
            <div class="textbx">
                <h2>Sign Up</h2>
                <p>Let's get started!</p>
            </div>
            <div class="inputBox">
                <input type="text" name="" placeholder="firstname">
            </div>
            <div class="inputBox">
                <input type="text" name="" placeholder="lastname">
            </div>
            <div class="inputBox">
                <input type="tel" name="" placeholder="mobilenumber">
            </div>
            <div class="inputBox">
                <input type="text" name="" placeholder="address">
            </div>
            <div class="inputBox">
                <input type="password" name="" placeholder="password">
            </div>
            <div class="inputBox">
                <input type="password" name="" placeholder="confirm password">
            </div>
            <div class="ssBox">
                <a href="login.php"><button type="button">Sign Up</button></a>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>