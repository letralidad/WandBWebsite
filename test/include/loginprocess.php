<?php
    session_start();
    require "dbcon.php";

    if(isset($_POST['signin'])){
        
        function charvalidation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $email =charvalidation($_POST['email']);
        $password =charvalidation($_POST['password']);

        if(empty($email)){
            header("Location: ../login.php?error=email");
            exit();
        }
        elseif(empty($password)){
            header("Location: ../login.php?error=password");
            exit();
        }
        else{
            $sql = "SELECT * FROM usertable WHERE email='$email';";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $hashpass = $row['userpass'];
                    
                    $verify = password_verify($password, $hashpass);
                    if($verify){ 
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['firstname'] = $row['firstname'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: ../user_landing.php");
                    }else{
                        header("Location: ../login.php?error=incorrect");
                        exit();
                    }
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
