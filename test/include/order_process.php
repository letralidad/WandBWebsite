<?php
    require "dbcon.php";

    if (isset($_GET['accept'])){
        $ordernum = $_GET['accept'];
        
        $dbOrdersconn->query("UPDATE active SET orderstatus='accepted' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);
        $dbOrdersconn->query("UPDATE allorders SET orderstatus='accepted' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);

        header("Location: ../incoming_tracker.php?accepted=$ordernum");
    }

    if (isset($_GET['kitchen'])){
        $ordernum = $_GET['kitchen'];
        
        $dbOrdersconn->query("UPDATE active SET orderstatus='kitchen' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);
        $dbOrdersconn->query("UPDATE allorders SET orderstatus='kitchen' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);

        header("Location: ../current_tracker.php?kitchen=$ordernum");
    }

    if (isset($_GET['transit'])){
        $ordernum = $_GET['transit'];
        
        $dbOrdersconn->query("UPDATE active SET orderstatus='transit' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);
        $dbOrdersconn->query("UPDATE allorders SET orderstatus='transit' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);

        header("Location: ../current_tracker.php?accepted=$ordernum");
    }

    if (isset($_GET['completed'])){
        $ordernum = $_GET['completed'];
        
        //Update the allorders table
        $dbOrdersconn->query("UPDATE allorders SET orderstatus='completed' WHERE ordernum=$ordernum") or die($dbOrdersconn->error);

        //Get the data of ordernum from active table
        $result = $dbOrdersconn->query("SELECT * FROM active WHERE ordernum=$ordernum") or die($dbOrdersconn->error);

        $row = $result->fetch_array();
        $orderdate = $row['orderdate'];
        $totalprice = $row['totalprice'];
        $userordered = $row['userordered'];
        $orderstatus = 'completed';

        //Store the data that have get from active table into history table
        $dbOrdersconn->query("INSERT INTO history (`ordernum`, `orderdate`, `totalprice`, `userordered`, `orderstatus`) 
                                            VALUES ($ordernum , $orderdate, $totalprice , $userordered , '$orderstatus')") 
                                    or die($dbOrdersconn->error);

        //Delete the data in active table
        $dbOrdersconn->query("DELETE FROM active WHERE ordernum=$ordernum") or die($dbOrdersconn->error);
        
        

        header("Location: ../current_tracker.php?accepted=$ordernum");
    }

?>