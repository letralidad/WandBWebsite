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
    <title>W&B - Manage your Account</title>
    <link rel="stylesheet" type="text/css" href="style/acc_management_style.css">
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
        <h1>Hi User!</h1>
        <a href="acc_menu.php">Menu</a>
        <a href="track_your_order.php">Track your order</a>
        <a href="history_user.php">Order History</a>
        <a class = "acc" href="include/get-user-account.php">Account Management</a>
        <a href="include/logout.php">Logout</a>
    </div>

    <!--content-->
    
    <div class="content">
        <?php
            if(isset($_GET['status'])){
                $status = $_GET['status'];
                if($status == 'success'){
                    echo '<div class="success">
                            <p>Account Update Successfully!</p>
                            </div>
                        ';
                }
            }

            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'firstname'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'lastname'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'mobile number'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'address'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'email'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'password'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'click'){
                    echo '<div class="alert">
                            <p>Enter all the required fields!</p>
                            </div>
                        ';
                }
                elseif($error == 'email-taken'){
                    echo '<div class="alert">
                            <p>Email is already registered!</p>
                            </div>
                        ';
                }
                elseif($error == 'file-extension'){
                    echo '<div class="alert">
                            <p>File is not an image!</p>
                            </div>
                        ';
                }
                elseif($error == 'image-size'){
                    echo '<div class="alert">
                            <p>The size of the file is large!</p>
                            </div>
                        ';
                }
                elseif($error == 'file-upload'){
                    echo '<div class="alert">
                            <p>File upload error!</p>
                            </div>
                        ';
                }
            }
        ?>
        <h2>Manage your account</h2><hr>
        <div  class="contentBox">
            <form action="include/acc-management-upload.php" method="post" enctype = "multipart/form-data" class="formBox">
                <div class="textbx">
                </div>
                <div class="inputBox">
                    <input type="text" name="firstname" placeholder="firstname" value="<?php echo $_SESSION['firstname'] ?>" require>
                </div>
                <div class="inputBox">
                    <input type="text" name="lastname" placeholder="lastname" value="<?php echo $_SESSION['lastname'] ?>" require>
                </div>
                <div class="inputBox">
                    <input type="tel" name="mobilenumber" placeholder="mobilenumber" value="<?php echo $_SESSION['mobilenumber'] ?>" require>
                </div>
                <div class="inputBox">
                    <input type="text" name="address" placeholder="address" value="<?php echo $_SESSION['address'] ?>" require>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']?>" require>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="password" require>
                </div>
                <div class="inputBox">
                    <input type="file" name="profile" id = "actual-btn" hidden require>
                    <label for="actual-btn" id="alt-button">
                        <span id="choose-file">Upload your photo:</span>&nbsp;
                        <span id="file-name">No file chosen yet!</span>  
                    </label>

                    <!--This is for the changing of text inside the upload-->
                    <script type="text/javascript">
                        const realFileButton = document.getElementById("actual-btn");
                        const altFileButton = document.getElementById("alt-button");
                        const textChooseFile = document.getElementById("choose-file");
                        const textFileName = document.getElementById("file-name");

                        realFileButton.addEventListener("change", function() {
                            if (realFileButton.value) {
                                textChooseFile.innerHTML = "File Uploaded:";
                                textFileName.innerHTML = realFileButton.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                            } else {
                                textChooseFile.innerHTML = "Upload your photo:";
                                textFileName.innerHTML = "No file chosen yet!";
                            }
                        });
                    </script>
                    
                </div>
                <div class="ssBox">
                    <button type="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>

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
