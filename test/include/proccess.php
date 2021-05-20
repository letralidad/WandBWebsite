<?php
    require "dbcon.php";
if(isset($_POST['signup'])){
    $firstname  = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

        if(empty($firstname)){
            header("Location: ../signup.php?error=firstname");
            exit();
        }
        if(empty($lastname)){
            header("Location: ../signup.php?error=lastname");
            exit();
        }
        if(empty($mobilenumber)){
            header("Location: ../signup.php?error=mobilenumber");
            exit();
        }
        if(empty($address)){
            header("Location: ../signup.php?error=address");
            exit();
        }
        if(empty($email)){
            header("Location: ../signup.php?error=email");
            exit();
        }
        if(empty($password)){
            header("Location: ../signup.php?error=password");
            exit();
        } 

        $sql = "INSERT INTO usertable(firstname,lastname,mobilenumber,address,email,userpass) VALUES('$firstname','$lastname','$mobilenumber','$address','$email','$password');";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "<script>alert('Record has been saved!');</script>";
            header("Location: ../login.php");
        }
}
else{
    header("Location: ../login.php?error=click");
    exit();
}