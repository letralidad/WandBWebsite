<?php
    require "dbcon.php";
    header('Content-Type: application/json');

    $result = $dbOrdersconn->query("SELECT * from history") or die($dbOrdersconn->error);

    $data = array();

    while($row=$result->fetch_assoc()){
        $data[] = $row;
    }
    print json_encode($data);