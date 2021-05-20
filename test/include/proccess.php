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
        $hashpass = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usertable(firstname,lastname,mobilenumber,address,email,userpass) VALUES('$firstname','$lastname','$mobilenumber','$address','$email','$hashpass');";
        $result = mysqli_query($conn, $sql);
        $getId = mysqli_insert_id($conn);
        $tablename = "ac" . strval($getId);
        $c_user_table = "CREATE TABLE $tablename ( 
            itemcode VARCHAR(100) NOT NULL, 
            itemname VARCHAR(100) NOT NULL, 
            price DECIMAL(9,2) NOT NULL, 
            qty DECIMAL(9,2) NOT NULL, 
            amount DECIMAL(9,2) NOT NULL);";
        $usertableresult = mysqli_query($dbAddtoCartconn, $c_user_table);
        if($result && $usertableresult)
        {
            echo "<script>alert('Record has been saved!');</script>";
            header("Location: ../login.php");
        }
}
else{
    header("Location: ../login.php?error=click");
    exit();
}