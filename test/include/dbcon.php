<?php

$serverName = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wandbuseracc";
$dbOrders = "dborders";
$dbAddtoCart ="dbaddtocart";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
//dborders database connection
$dbOrdersconn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbOrders);
$dbAddtoCartconn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbAddtoCart);