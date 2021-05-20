<?php
    session_start();
    require "dbcon.php";

    if(isset($_POST['signin'])){
        
        function charvalidation($data){
            $data = trim($data);
            $data = stripsashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($email)){
            header("Location: ../login.php?error=email");
            exit();
        }
        elseif(empty($password)){
            header("Location: ../login.php?error=password");
            exit();
        }
        else{
            $sql = "SELECT * FROM usertable WHERE email='$email' AND userpass='$password';";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['firsname'] = $row['firstname'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: ../user_landing.php");
                }
            }
            else{
                header("Location: ../login.php?error=incorrect");
                exit();
            }  
        }
    }
    else{
        header("Location: ../login.php?error=click");
        exit();
    }
