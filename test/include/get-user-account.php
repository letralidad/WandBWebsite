<?php
    session_start();
    include "dbcon.php";
    $contain = intval($_SESSION['id']);
    $result = $conn->query("SELECT * FROM usertable WHERE id=$contain") or die($mysqli->error());

    $row = $result->fetch_array();
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['mobilenumber'] = $row['mobilenumber'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['email'] = $row['email'];

    header('Location: ../acc_management.php');
?>