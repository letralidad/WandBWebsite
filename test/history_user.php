<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B - Order History</title>
    <link rel="stylesheet" type="text/css" href="style/history_user_style.css">
    <link rel="stylesheet" type="text/css" href="style/nav_s.css">
    <link rel="stylesheet" type="text/css" href="style/table-design-for-user.css">
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
        <a class = "history" href="history_user.php">Order History</a>
        <a href="acc_management.php">Account Management</a>
        <a href="include/logout.php">Logout</a>
    </div>

    <!--content-->
    <div class="content">
        <h2>Order History</h2><hr>
    <?php 
            include "include/dbcon.php";
            $result = $dbOrdersconn->query("SELECT * from history") or die($dbOrdersconn->error);
        ?>

<?php 
            include "include/dbcon.php";
            $result = $dbOrdersconn->query("SELECT * from history") or die($dbOrdersconn->error);
        ?>

        
        <div class="table">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Date of Order</th>
                        <th>Total Price</th>
                    </tr>
                </thead>

            <?php 
                if ($result->num_rows > 0){
                    
                    while($row=$result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['ordernum']; ?></td>
                            <td><?php echo $row['orderdate']; ?></td>
                            <td><?php echo $row['totalprice']; ?></td>
                            <td><?php echo $row['userordered']; ?></td>
                            <td><?php echo $row['orderstatus']; ?></td>
                        </tr>

                
            <?php
                    endwhile; 
                }else{?>
                        <tr>
                            <td colspan=3 style="font-size:20px; height: 90px;">
                                <i>
                                You are welcome to make an order anytime!
                                <i>
                            </td>
                        </tr>
                <?php
                }?>
            
            </table>
        </div>   
            </table>
        </div>

    <script src="app.js"></script>
</body>
</html>