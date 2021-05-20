<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>W&B - Incoming Order</title>
    <link rel="stylesheet" type="text/css" href="style/incoming_style.css">
    <link rel="stylesheet" type="text/css" href="style/table-design.css">
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
        <h1>Hi Admin!</h1>
        <a class = "incoming" href="incoming_order.php">Incoming Order</a>
        <a href="current_order.php">Current Order</a>
        <a href="history_order.php">History of Orders</a>
        <a href="index.php">Logout</a>
    </div>

    <div class="view-note">
        <p ><i><b>Note: </b>Admin Panel is best in Desktop View</i></p>
    </div>
    
    <!--content-->
    <div class="content">
        <h2>Incoming Order</h2><hr>

        <!--Content of Table-->
        <?php 
            include "include/dbcon.php";
            $result = $dbOrdersconn->query("SELECT * from active WHERE orderstatus='waiting'") or die($dbOrdersconn->error);
        ?>

        
        <div class="table">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Date of Order</th>
                        <th>Total Price</th>
                        <th>User Ordered</th>
                        <th>Order Status</th>
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
                            <td colspan=5 style="font-size:20px; height: 90px;">
                                <i>
                                    No incoming orders at the moment!
                                <i>
                            </td>
                        </tr>
                <?php
                }?>
            
            </table>
        </div>
    </div>


    <script src="app.js"></script>
</body>
</html>