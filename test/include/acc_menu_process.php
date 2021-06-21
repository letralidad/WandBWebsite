
<?php
    session_start();
    require "dbcon.php";
    if(isset($_SESSION['id'])){
        if(isset($_GET['addtocart'])){
            $ec1_qty = $_GET['ec1_qty'];
            $ec2_qty = $_GET['ec2_qty'];
            $ec3_qty = $_GET['ec3_qty'];
            $ec4_qty = $_GET['ec4_qty'];
            $ec5_qty = $_GET['ec5_qty'];
            $ec6_qty = $_GET['ec6_qty'];

            $qty_data= array($ec1_qty, $ec2_qty, $ec3_qty, $ec4_qty,$ec5_qty, $ec6_qty);
            
            $result = $dbAddtoCartconn->query("SELECT itemcode,itemname,itemprice FROM items") or die($mysqli->error);
            $id = $_SESSION['id'];
            
        
            $getId = mysqli_insert_id($conn);
            $tablename = "ac" . strval($id);
            $totalprice = 0;
                for($i = 0; $i < 6;){
                    while($row = $result->fetch_assoc()){
                            $itemcode = $row['itemcode'];
                            $itemname = $row['itemname'];
                            $itemprice = $row['itemprice'];                   
                            if($qty_data[$i] > 0){
                                $amount = $itemprice * $qty_data[$i];
                                $totalprice += $amount;
                                $insertsql = $dbAddtoCartconn->query("INSERT INTO $tablename(itemcode,itemname,price,qty,amount) VALUES('$itemcode','$itemname','$itemprice','$qty_data[$i]','$amount')") or die($mysqli->error);          
                            }                 
                            $i++;
                    }         
                }
                $_SESSION['totalprice'] = $totalprice; 
            //pakilagyan ordered successfuly
            header("Location: ../checkout.php");
            exit();
        }
    }