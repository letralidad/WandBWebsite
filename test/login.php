<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B</title>
    <link rel="stylesheet" type="text/css" href="nav_style.css">
    <link rel="stylesheet" type="text/css" href="login.css">
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

    <!-- Login form -->
    <div class="contentBox">
        <div class="formBox">
            <h2>Welcome</h2>
            <p>Log in now to find the best deals in town</p>
            <div class="inputBox">
                <input type="text" name="" placeholder="username">
            </div>
            <div class="inputBox">
                <input type="password" name="" placeholder="password">
            </div>
            <div class="forgot">
                <a href="#"><label>forgot password?</label></a>
            </div>
            <div class="ssBox">
                <input type="submit" value="Sign In" name="">
                <a href="signup.php"><button type="button">Sign Up</button></a>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>