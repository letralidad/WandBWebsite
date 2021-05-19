<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B</title>
    <link rel="stylesheet" type="text/css" href="style/nav_style.css">
    <link rel="stylesheet" type="text/css" href="style/signup.css">
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
    <?php require "include/dbcon.php";?>
    <div  class="contentBox">
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'firstname'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'lastname'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'mobile number'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'address'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'email'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'password'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
                elseif($error == 'click'){
                    echo "<script>alert('Enter all the required fields');</script>";
                }
            }
        ?>
        <form action="include/proccess.php" method="post" class="formBox">
            <div class="textbx">
                <h2>Sign Up</h2>
                <p>Let's get started!</p>
            </div>
            <div class="inputBox">
                <input type="text" name="firstname" placeholder="firstname" require>
            </div>
            <div class="inputBox">
                <input type="text" name="lastname" placeholder="lastname" require>
            </div>
            <div class="inputBox">
                <input type="tel" name="mobilenumber" placeholder="mobilenumber" require>
            </div>
            <div class="inputBox">
                <input type="text" name="address" placeholder="address" require>
            </div>
            <div class="inputBox">
                <input type="email" name="email" placeholder="Email" require>
            </div>
            <div class="inputBox">
                <input type="password" name="password" placeholder="password" require>
            </div>
            <div class="ssBox">
            <a href="login.php"><button type="submit" name="signup">Sign Up</button></a>
            </div>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>