<?php
    session_start();
    include "dbcon.php";
    $contain = intval($_SESSION['id']);
    $result = $conn->query("SELECT * FROM usertable WHERE id=$contain") or die($mysqli->error());

    $row = $result->fetch_array();
    $_SESSION['firstname'] = str_replace('^', ' ' , $row['firstname']);
    $_SESSION['lastname'] = str_replace('^', ' ' , $row['lastname']);
    $_SESSION['mobilenumber'] = $row['mobilenumber'];
    $_SESSION['address'] = str_replace('^', ' ' , $row['address']);
    $_SESSION['email'] = $row['email'];

    if(isset($_GET['status'])){
        $status = $_GET['status'];
        if($status == 'success'){
            header("Location: ../acc_management.php?status=success");
        }
    } else {
        header('Location: ../acc_management.php');
    }

    
?>