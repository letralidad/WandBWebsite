<?php
    require "dbcon.php";
    session_start();
    if(isset($_POST['save'])){
        $id = intval($_SESSION['id']);
        $firstname  = str_replace(' ', '^' , $_POST['firstname']);
        $lastname = str_replace(' ', '^' , $_POST['lastname']);
        $mobilenumber = $_POST['mobilenumber'];
        $address = str_replace(' ', '^' , $_POST['address']);
        $email = $_POST['email'];
        $emailinsession = $_SESSION['email'];
        $password = $_POST['password'];

        //Image Upload
        $imageName = $_FILES['profile']['name'];
        $imageType = $_FILES['profile']['type'];
        $imageTmpName = $_FILES['profile']['tmp_name'];
        $imageError = $_FILES['profile']['error'];
        $imageSize = $_FILES['profile']['size'];

        $imgExtension = pathinfo($imageName, PATHINFO_EXTENSION);
        $imgExtension = strtolower($imgExtension);
        $allowedExtension = array('jpg', 'jpeg', 'png');

        if ($imageError == 0) {
            if ($imageSize <= 8388608) {
                if (in_array($imgExtension, $allowedExtension)) {
                    $imageNewName = uniqid("WandB-", true).'.'. $imgExtension;
                    $imageUploadPath = '../profile/' . $imageNewName;
                    move_uploaded_file($imageTmpName , $imageUploadPath);  
                } else {
                    header("Location: ../acc_management.php?error=file-extension");
                }
            } else {
                header("Location: ../acc_management.php?error=image-size");
            }
            
        } elseif ($imageError == 4) {
        } else {
            header("Location: ../acc_management.php?error=file-upload");
        }


        //Data Upload
        if(empty($firstname)){
            header("Location: ../acc_management.php?error=firstname");
            exit();
        }
        if(empty($lastname)){
            header("Location: ../acc_management.php?error=lastname");
            exit();
        }
        if(empty($mobilenumber)){
            header("Location: ../acc_management.php?error=mobilenumber");
            exit();
        }
        if(empty($address)){
            header("Location: ../acc_management.php?error=address");
            exit();
        }
        if(empty($email)){
            header("Location: ../acc_management.php?error=email");
            exit();
        }
        if(empty($password)){
            header("Location: ../acc_management.php?error=password");
            exit();
        }
        $emaildelquery = "UPDATE usertable SET email = NULL WHERE id = $id;";
        $emaildelexec = mysqli_query($conn, $emaildelquery);
        if ($emaildelexec) {
            
            $emailquery = "SELECT * FROM usertable WHERE email='$email' ";
            $emailresult = mysqli_query($conn, $emailquery);

            if (mysqli_num_rows($emailresult) > 0) {
                $emailrestorequery = "UPDATE usertable SET email = '$emailinsession' WHERE id = $id;";
                $emailrestoreexec = mysqli_query($conn, $emailrestorequery);
                if($emailrestoreexec) {
                    header("Location: ../acc_management.php?error=email-taken");
                }
                exit();
            } else {
                $hashpass = password_hash($password, PASSWORD_DEFAULT);

                $updateinfo = "UPDATE usertable SET
                                    firstname = '$firstname',
                                    lastname = '$lastname',
                                    mobilenumber = '$mobilenumber',
                                    address = '$address',
                                    email = '$email',
                                    userpass = '$hashpass',
                                    photoname ='$imageNewName'
                                WHERE id = $id;";
                $result = mysqli_query($conn, $updateinfo);
                if($result)
                {
                    header("Location: get-user-account.php?status=success");
                }
            }
        }

            
    }
    else{
        header("Location: ../acc_management.php?error=click");
        exit();
    }