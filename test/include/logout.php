<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["firstname"]);
    unset($_SESSION["id"]);    
    header("Location:../index.php");
?>