<?php
    session_start();
    require "dbcon.php";
    if(isset($_SESSION['id'])){
        if(isset($_GET['checkout'])){

            //date
            $today = date("Ymd");

            //totalprice
            $totalprice = $_SESSION['totalprice'];
            //id ni user
            $id = $_SESSION['id'];
            //order status always waiting
            $orderstatus = "waiting";


            $tablename = "ac" . strval($id);
            $activeSql = $dbOrdersconn->query("INSERT INTO active (orderdate,totalprice,userordered,orderstatus) VALUES('$today','$totalprice','$id','$orderstatus')") or die($mysqli->error);
            $allOrderssql = $dbOrdersconn->query("INSERT INTO allorders (orderdate,totalprice,userordered,orderstatus) VALUES('$today','$totalprice','$id','$orderstatus')") or die($mysqli->error);
            $delete = $dbAddtoCartconn->query("DELETE FROM ac33 WHERE price=199");
            header("Location: ../track_your_order.php");
            exit();
        }
    }