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
    <title>W&B - Checkout</title>
    <link rel="stylesheet" type="text/css" href="style/checkout_style.css">
    <link rel="stylesheet" type="text/css" href="style/nav_s.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/Logo.ico"/> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/table-design-for-user.css">
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
        <a href="acc_management.php">Account Management</a>
        <a href="index.php">Logout</a>
    </div>
    
    <!--content-->
    <form action="include/checkout_process.php">
    <div class="content">
        <h2>Checkout your order</h2><hr>
        <div class="content1">
        <?php
            $userId = intval($_SESSION['id']);
            $tableUserId = "ac" . $userId;
            include "include/dbcon.php";
            $result = $dbAddtoCartconn->query("SELECT itemname,qty,price,amount from $tableUserId") or die($dbAddtoCart->error);
        ?>
            <div class="table">
                <table class="table-content">
                    <thead>
                        <tr>
                            <th>Orders</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <?php 
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['itemname']; ?></td>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                        </tr>

                
                <?php
                    endwhile; 
                }?>
                
                </table>
            </div>
        </div>
        <div class="totalprice">
            <p>Total Price:<?php echo " " . $_SESSION['totalprice']; ?></p>    
        </div>
        <button name="checkout" class="btn">checkout</button>        
    </div>  
    </form>  
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