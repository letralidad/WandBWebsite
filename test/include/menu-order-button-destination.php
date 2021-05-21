<?php
session_start();
if(empty($_SESSION['id'])){
    header("Location: ../login.php");
    exit();
}
else if($_SESSION['id'] == 1){
    header("Location: ../admin.php");
    exit();
}
else if($_SESSION['id'] == 2){
    header("Location: ../order_tracker.php");
    exit();
}
else if($_SESSION['id'] > 2){
    header("Location: ../acc_menu.php");
    exit();
}
else{
    header("Location: ../login.php?error=login");
    exit();
}
?>
